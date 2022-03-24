<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Services\Traits\SendMessage;

class Product extends Component
{
    use SendMessage;

    public $product;
    public $authID;
    public $videoExtension;
    public $video;
    public $title;

    public function mount($product)
    {

        $this->product = \App\Models\Product::where('id', $product)->with('productImages')->get()->first();
        $this->title = $this->product->name;
        if (auth()->id()) {
            $this->authID = auth()->id();
        }
        $this->product->video = json_decode($this->product->video, 1);
        if ($this->product->video) {
            $video = $this->product->video[0]['download_link'];
            $this->video = $video;

            $video = explode('.', $video);
            $this->videoExtension = $video[count($video) - 1];
        }
    }

    public function render()
    {
        return view('livewire.product')->extends('master')->layoutData(['title' => $this->title]);
    }

    public function setOffer($productID, $productName = '')
    {
        {
            if (auth()->id()) {
                try {
                    \App\Models\Subscription::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $productID,
                        'subscribetime' => \Carbon\Carbon::now()->addDays(30)
                    ]);
                } catch (\Exception $err) {
                    session()->flash('error', 'Упс, что-то пошло нет, возможно у вас уже есть этот продукт');
                    redirect()->route('product', ['product' => $this->product->id]);
                }
                if (!session()->has('error')) {
                    $message =
                        'Имя: ' . auth()->user()->name . PHP_EOL .
                        'Телефон: ' . auth()->user()->tel . PHP_EOL .
                        'Email: ' . auth()->user()->email . PHP_EOL .
                        'Продукт: ' . $this->product->name;
                    $this->sendMessageToAdmin($message, 'Получен заказ');
                    mail(auth()->user()->email, 'Ваш заказ принят', 'Ваш заказ ' . $this->product->name . ' принят, скоро с вами свяжется менеджер');
                    session()->flash('message', 'Ваш заказ принят, скоро с вами свяжется менеджер');
                    redirect()->route('product', ['product' => $this->product->id]);
                }

            } else {
                redirect()->route('register', ['productID' => $productID, 'productName' => $productName]);
            }

        }
    }
}
