<?php

namespace App\Http\Controllers;

use App\Models\user;

use Notification;

use App\Notifications\SendEmailNotification;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendnotification()
    {
        $user = user::all();

        $details = [
             'greeting'=>'Abinash Mekap checking smtp',
             'body'=>'hii Ashis this is abinash',
             'actiontext'=>'plz dont mind it is a testing smtp using laravel',
             'actionurl'=>'/',
             'lastline'=>'thank you',

        ];
        Notification::send($user,new SendEmailNotification($details));
        dd('done');
    }
}
