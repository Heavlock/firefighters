<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Services\Traits\SendMessage;

class RegisteredUserController extends Controller
{
    use SendMessage;

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tel' => ['required', 'integer'],
            'productID' => ['nullable'],
            'productName' => ['nullable'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => (int)$request->tel,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        if ($request->productID) {
            try {
                \App\Models\Subscription::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $request->productID,
                    'subscribetime' => \Carbon\Carbon::now()->addDays(30)
                ]);
            } catch (\Exception $err) {
                session()->flash('error', 'Упс, что-то пошло не так');
            }
            if (!session()->has('error')) {
                $message = $request->messageText . PHP_EOL .
                    'Имя: ' . $request->name . PHP_EOL .
                    'Телефон: ' . $request->tel . PHP_EOL .
                    'Email: ' . $request->email . PHP_EOL .
                    'Продукт: ' . $request->productName;
                $this->sendMessageToAdmin($message, 'Получен заказ');
                mail($request->email, 'Ваш заказ принят', 'Ваш заказ ' . $request->productName . ' принят, скоро с вами свяжется менеджер');
                session()->flash('message', 'Ваш заказ принят, скоро с вами свяжется менеджер');
            }
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
