<?php
/**
 * Created by PhpStorm.
 * User: nichiren
 * Date: 7/8/18
 * Time: 5:25 PM
 */

namespace App\Http\Controllers;


use App\Advert;
use App\Category;
use App\Company;

class PageController extends Controller
{
    public function index()
    {
        $adverts = Advert::latest()->with('categories')->get();
        $categories = Category::all();

       // return $adverts;
        return view('public.pages.home', compact('adverts', 'categories'));
    }

    public function show_all()
    {
        $adverts = Advert::latest()->with('categories')->get();
        return view('public.pages.jobs', compact('adverts'));
    }

    public function show_one($id)
    {
        $advert = Advert::find($id);
        return view('public.pages.job', compact('advert'));
    }

    public function admin_dashboard()
    {
        return view('private.admin.dashboard');
    }

    public function candidate_dashboard()
    {
        return view('private.candidates.dashboard');
    }

    public function show_all_companies()
    {
        $companies = Company::all();
        return view('public.pages.companies', compact('companies'));
    }

    public function show_one_company($id)
    {
        $company = Company::find($id);
        return view('public.pages.company', compact('company'));
    }

}