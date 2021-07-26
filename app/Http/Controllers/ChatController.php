<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
protected function getChat(){
    return view('Admin.company.chat');
}
}
