<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $title = 'Checkbox';

		return view('mazer/form-element-checkbox', compact('title'));
    }
}
