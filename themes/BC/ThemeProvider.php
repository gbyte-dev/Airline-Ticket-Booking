<?php

namespace Themes\BC;



use Database\Seeders\DatabaseSeeder;



class ThemeProvider extends \Themes\Base\ThemeProvider

{



    public static $version = '3.6.1';

    public static $name = 'TripGare';

    public static $seeder = DatabaseSeeder::class;



    public function register()

    {

        parent::register();

        $this->app->register(\Themes\BC\Core\ModuleProvider::class);

    }

}

