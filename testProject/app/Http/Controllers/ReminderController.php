<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public home()
    {
        $Reminders = ['Buy Mike','Go to Bank','Move to out '];
        return view ('home')   
    }
}
