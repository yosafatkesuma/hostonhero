<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all;
        return view('admin.contact', compact('contacts'))->with('i', (request()->input(1)));
    }

    public function create()
    {
        return view();
    }

}
