<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications;
class NotificationController extends Controller
{
    //
    public function get()
    {
        return Notifications::all();
    }
}
