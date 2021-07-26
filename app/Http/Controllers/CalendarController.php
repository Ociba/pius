<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * This function gets calendar
     */
    protected function getCalendar(){
        return view('Admin.company.calendar');
    }
}
