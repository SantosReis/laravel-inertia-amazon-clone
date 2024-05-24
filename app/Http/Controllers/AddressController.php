<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Address/Index');
    }
}
