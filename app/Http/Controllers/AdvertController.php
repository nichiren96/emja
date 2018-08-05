<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    }


    public function userAdvert()
    {

        $adverts = User::find(auth()->id())->adverts;

        return view('private.adverts.userAdvert', compact('adverts'));
    }

    public function create(Request $request)
    {
        $categories = Category::all();
        return view('private.adverts.advert', compact('categories'));

    }

    public function update(Advert $advert, Request $request)
    {
        $categories = Category::all();
        if ($request->isMethod('GET')) {
            return view('private.adverts.advert', compact('advert', 'categories'));
        }

        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $advert->edit($request);
        return redirect(route('user_advert'))->with(['success' => 'Annonce modifiée avec succès']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $advert = new Advert();
        $advert->store($request);

        return redirect(route('user_advert'))->with(['success' => 'Annonce ajoutéé avec succès']);

    }


    public function delete(Advert $advert)
    {
        $advert->remove();
        return redirect(route('user_advert'))->with(['success' => 'Annonce supprimée avec succès']);
    }





}
