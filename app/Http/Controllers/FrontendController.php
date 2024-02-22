<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
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

    public function companyMilestone()
    {
        $milestones = Milestone::query()
            ->orderBy('milestone_year', 'desc')
            ->get();

        $count = $milestones->count();

        $firstHalf = [];
        $secondHalf = [];

        foreach ($milestones as $index => $milestone) {
            if ($index % 2 == 0) {
                $firstHalf[] = $milestone;
            } else {
                $secondHalf[] = $milestone;
            }
        }

        return view('milestone', compact('firstHalf', 'secondHalf', 'count'));
    }
}
