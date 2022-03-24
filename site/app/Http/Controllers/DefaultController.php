<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\Traits\SendMessage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    use SendMessage;

    public function __construct()
    {
        $this->middleware('auth')->only('userAccount');
    }

    public function home()
    {
        $products = Product::All();
        $content = DB::table('landing_page_contents')->find(1);
        return view('pages.main-page', compact('products', 'content'));
    }

    public function form()
    {
        $content = DB::table('landing_page_contents')->find(1);
        return view('pages.form-page', compact('content'));
    }

    public function sendForm(Request $request)
    {

        $request->validate([
            'inputName' => 'nullable',
            'messageText' => 'required',
            'inputNumber' => ['integer'],
        ]);

        $message =
            'Имя: ' . $request->inputName . PHP_EOL .
            'Телефон: ' . $request->inputNumber . PHP_EOL .
            $request->messageText;
        $this->sendMessageToAdmin($message, $request->inputSubject ?? '');
        session()->flash('message', 'Сообщение отправлено, скоро с вами свяжется менеджер');
        return redirect(RouteServiceProvider::HOME);
    }

    public function test()
    {
        dd(User::GetActiveSubscribers());
    }

}
