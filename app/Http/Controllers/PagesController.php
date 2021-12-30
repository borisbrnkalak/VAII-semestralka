<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function ourTeamPage()
    {
        return view("pages.our-team");
    }

    public function homePage()
    {
        return view("pages.index");
    }

    public function overviewPage()
    {
        return view("pages.overview");
    }

    public function testimonialsPage()
    {
        return view("pages.testimonials");
    }

    public function contactPage()
    {
        return view("pages.contact");
    }

    public function productPage()
    {
        return view("pages.product");
    }

    public function editPage()
    {
        return view("pages.edit");
    }
}
