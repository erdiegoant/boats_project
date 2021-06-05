<?php

namespace App\Http\Controllers;

class BillingPortalController extends Controller
{
    public function __invoke()
    {
        return request()->user()->redirectToBillingPortal(route('dashboard'));
    }
}
