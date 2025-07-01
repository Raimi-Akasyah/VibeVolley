<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function homepage()
    {
        return view('homepage');
    }
    public function login()
    {
        return view('login');
    }
    public function payment()
    {
        return view('payment');
    }
    public function productPage()
    {
        return view('ProductPage');
    }
    public function signup()
    {
        return view('signup');
    }
    public function admin()
    {
        return view('admin');
    }
    public function trainingPage()
    {
        return view('trainingPage');
    }
} 