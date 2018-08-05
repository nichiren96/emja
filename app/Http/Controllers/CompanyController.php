<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Create a company
     */
    public function create()
    {
        return view('private.companies.company');
    }

    public function userCompany()
    {
        $company = auth()->user()->company;
        return view('private.companies.userCompany', compact('company'));
    }

    /**
     * Store the company
     */
    public function store(Request $request)
    {

        $company = new Company();
        $company->store($request);

        return redirect(route('user_company'))->with(['success' => 'Entreprise ajoutée avec succès']);
    }

    public function update(Company $company, Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('private.companies.company', compact('company'));
        }

        $company->edit($request);

        return redirect(route('user_company'))->with(['success' => 'Entreprise modifiée avec succès']);

    }

    public function delete()
    {

    }
}
