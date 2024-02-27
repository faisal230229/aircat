<?php

namespace App\Http\Controllers;

use App\Enums\PageNameEnums;
use App\Models\CustomPage;
use App\Models\Milestone;
use App\Models\Quote;
use App\Models\SeoTag;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        $meta = SeoTag::query()
                        ->where('page_name', PageNameEnums::HOME)
                        ->first();
        return view('home', compact('meta'));
    }
    public function services()
    {
        $meta = SeoTag::query()
            ->where('page_name', PageNameEnums::SERVICES)
            ->first();
        $services = Service::query()
                        ->get();
        return view('services', compact('services', 'meta'));
    }

    public function serviceDetail(Service $service)
    {
        return view('service-detail', compact('service'));
    }

    public function companyMilestone()
    {
        $meta = SeoTag::query()
            ->where('page_name', PageNameEnums::COMPANY_MILESTONE)
            ->first();

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

        return view('milestone', compact('firstHalf', 'secondHalf', 'count', 'meta'));
    }

    public function contact()
    {
        $meta = SeoTag::query()
            ->where('page_name', PageNameEnums::CONTACT)
            ->first();
        $settings = Setting::pluck('value', 'name');
        return view('contact', compact('meta', 'settings'));
    }

    public function companyOverview() {
        $meta = SeoTag::query()
            ->where('page_name', PageNameEnums::COMPANY_OVERVIEW)
            ->first();

        return view('overview', compact('meta'));
    }

    public function saveContact(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'max:255'],
            'message' => ['required'],
            'phone' => ['required', 'max:255'],
        ]);

        Quote::query()
            ->create($data);

        return redirect()->back()->with('success', 'Contact Form Submitted Successfully!');
    }

    public function customPage(CustomPage $customPage)
    {
        return view('custom-page', [
            'page' => $customPage,
        ]);
    }
}
