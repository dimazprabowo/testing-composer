<?php
namespace VendorName\PackageName;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class TriggerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
    }
}