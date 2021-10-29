<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $halaman = 'contact';
        return view('pages.contact', compact('halaman'));
    }
}
