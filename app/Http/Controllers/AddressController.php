<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class AddressController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Address/Index');
    }
}
