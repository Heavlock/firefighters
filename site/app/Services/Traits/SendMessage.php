<?php

namespace App\Services\Traits;

use App\Models\User;

trait SendMessage
{
    function sendMessageToAdmin($message, $subject = '')
    {
        $admins = User::where('role_id', 1)->get();
        foreach ($admins as $admin) {
            \mail($admin->email, 'FireResque-' . $subject,
                $message
            );
        }
    }
}
