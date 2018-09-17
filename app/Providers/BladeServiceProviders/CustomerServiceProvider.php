<?php

namespace App\Providers\BladeServiceProviders;

use Illuminate\Support\ServiceProvider;
use Sentinel;
/*use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
*/
class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        /* can also be done using the following method of composer */

        /* view()->composer('inc.left_sidebar',function($view){
            $logged_in_user  = Sentinel::getUser();
            // dd($logged_in_user);
            $view->with('logged_in_user',$logged_in_user);
        });*/



         //Ability to View Customer
        \Blade::if('canViewCustomer', function () {
            $user = Sentinel::getUser();
            $hasAccess = $user->hasAccess('customer.view');
            return $hasAccess;
        });

        //Ability to Edit Customer
        \Blade::if('canAddcustomer', function () {
            $user = Sentinel::getUser();
            $hasAccess = $user->hasAccess('customer.add');
            return $hasAccess;
        });

         //Ability to Edit Customer
        \Blade::if('canEditcustomer', function () {
            $user = Sentinel::getUser();
            $hasAccess = $user->hasAccess('customer.edit');
            return $hasAccess;
        });

         //Ability to Delete Customer
        \Blade::if('canDeleteCustomer', function () {
            $user = Sentinel::getUser();
            $hasAccess = $user->hasAccess('customer.delete');
            return $hasAccess;
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
