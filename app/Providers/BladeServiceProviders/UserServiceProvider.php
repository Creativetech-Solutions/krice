<?php

namespace App\Providers\BladeServiceProviders;

use Illuminate\Support\ServiceProvider;
use Sentinel;
class UserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::if('isUserActive', function ($id) {

            $user = Sentinel::findById($id);

            $Activation = Sentinel::getActivationRepository();

            $status = $Activation->completed($user);

            return $status;
            
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
