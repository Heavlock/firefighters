<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('command:subscribeReduceByDay', function () {

    function sendMessageToAdmin($message, $subject = '')
    {
        $admins = User::where('role_id', 1)->get();
        foreach ($admins as $admin) {
            \mail($admin->email, 'FireResque-' . $subject,
                $message
            );
        }
    }

    $activeUsers = \App\Models\User::GetActiveSubscribers();
    $admins = '';

    foreach ($activeUsers as $user) {
        foreach ($user->subscriptions as $index => $subscription) {
            $firstDate = \Carbon\Carbon::parse($user->subscriptions[$index]->subscribetime);

            if ($firstDate > now()) {

                $user->subscriptions[$index]->subscribetime = \Carbon\Carbon::parse($user->subscriptions[$index]->subscribetime)->subDay();
                $secondDate = $user->subscriptions[$index]->subscribetime;
                //подписка закончена
                dump($firstDate->diffInDays(now()));
                dump(($secondDate->diffInDays(now()) == 7));
                if ($secondDate < now()) {
                    //сделать юзера неактивным, для включения сделать доп проверку на количество активных подписок у пользователя
//                $user->role_id = 2;
//                if (!$user->save()) {
//                    $user->save();
//                }
                    dump('end');
                    mail($user->email, 'Срок подписки истек', 'Истек срок подписки, можно продлить на сайте ' . config('app.url'));
                    sendMessageToAdmin('Срок подписки пользователя истек: ' . $user->email, 'Срок подписки пользователя истек');
                } //до конца подписки 7 дней
                elseif ($secondDate->diffInDays(now()) == 7) {
                    dump('7 days');
                    mail($user->email, 'До конца подписки осталась неделя', 'До конца подписки осталась одна неделя ' . config('app.url'));
                    sendMessageToAdmin('До конца подписки пользователя 7 дней: ' . $user->email, 'До конца подписки пользователя 7 дней');
                }

                //сохраняем после вычитания дня
                if (!$user->subscriptions[$index]->save()) {
                    $user->subscriptions[$index]->save();
                };
            }
        }
    }
})->purpose('Уменьшаем подписку на 1 день');
