<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Shipping;
use App\Models\Slide;
use Darryldecode\Cart\Cart;
use Illuminate\Pagination\Paginator;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('categories', Category::all());
            $view->with('settings', Setting::all());
            $view->with('slides', Slide::all());
            $view->with('shippings', Shipping::all());
            $view->with('totalCartProduct', count(\Cart::getContent()));
            $view->with('cartProducts', \Cart::getContent());
        });

        Paginator::useBootstrapFour();
    }
}
