<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {

        $arrData = [
            'type_menu' => '',
            'totalUser' =>  count(User::all()),
            'verifiedUser' =>  count(User::whereNotNull('email_verified_at')->get()),
            'notVerifiedUser' =>  count(User::whereNull('email_verified_at')->get()),
        ];

        return view('pages.blank-page', $arrData);
    }
}
