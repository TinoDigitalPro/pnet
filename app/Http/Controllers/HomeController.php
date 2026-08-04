<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }
    public function services_index()
    {
        return view('pages.services.index');
    }
    public function contact_us_index()
    {
        return view('pages.contact_us.index');
    }

    public function about_us_index()
    {
        return view('pages.about.index');
    }

    public function services_1_index()
    {
        return view('pages.service.consulting_index');
    }
    public function services_2_index()
    {
        return view('pages.service.technology_index');
    }
    public function services_3_index()
    {
        return view('pages.service.operations_support_index');
    }

    public function industries_index()
    {
        return view('pages.industries.index');
    }

    public function industries_1_index()
    {
        return view('pages.industry.energy_utilities_index');
    }
    public function industries_2_index()
    {
        return view('pages.industry.manufacturing_supply_chain');
    }
    public function industries_3_index()
    {
        return view('pages.industry.cpi_index');
    }
    public function industries_4_index()
    {
        return view('pages.industry.ot_index');
    }
}
