<?php

namespace App\Providers;

use App\Models\Navbar;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Categories;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*',function($view){
            $navitems= Navbar::orderBy('ordering')->get();
            $categories= Categories::all();
            $products= Product::all();
            $contact= Contact::find(1);
            $view->with('data',[$navitems,$categories,$products,$contact]);
        });
    }
}
