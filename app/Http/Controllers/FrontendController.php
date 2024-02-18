<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function services()
    {
        $services = Service::query()
                        ->get();
        return view('services', compact('services'));
    }

    public function serviceDetail(Service $service)
    {
        return view('service-detail', compact('service'));
    }
}
