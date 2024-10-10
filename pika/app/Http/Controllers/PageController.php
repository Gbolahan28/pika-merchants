<?php

namespace App\Http\Controllers;

use App\Mail\FormMails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Http;


class PageController extends Controller
{

        public function index()
    {
        return view('index');
    }

        public function emailConfirm()
    {
        return view('email-confirm');
    }

        public function register5()
    {
        return view('register5');
    }

    public function verificationSuccess()
{
    return view('verification-success');
}

public function invalidToken()
{
    return view('invalid-token');
}


}