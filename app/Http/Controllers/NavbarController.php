<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Http\Requests\StoreNavbarRequest;
use App\Http\Requests\UpdateNavbarRequest;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navitems= Navbar::all();
        return view('backend.menu.menulist',[
            'navitems' => $navitems
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.menu.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNavbarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNavbarRequest $request, Navbar $navbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar)
    {
        //
    }

    public function home()
    {
        return view('frontend.home');
    }
    public function about()
    {
        return view('frontend.about-us');
    }
    public function products()
    {
        return view('frontend.products');
    }
    public function news()
    {
        return view('frontend.news');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
