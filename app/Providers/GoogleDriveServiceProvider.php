<?php

namespace App\Providers;

// use Hypeweb\Flysystem\GoogleDrive\GoogleDriveAdapter;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
// use nao_pon\flysystem_google_drive\src\GoogleDriveAdapter;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd("I AM THE SYSTEM");
        //  \Storage::extend('google', function($app, $config) {
        //     $client = new \Google_Client();
        //     $client->setAccessType('offline');
        //     $client->setClientId($config['clientId']);
        //     $client->refreshToken($config['refreshToken']);
        //     $client->fetchAccessTokenWithRefreshToken($config['refreshToken']);

        //     $service = new \Google_Service_Drive($client);
        //     $adapter = new \Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter($service, $config['folderId']);
        //     return new \League\Flysystem\Filesystem($adapter);     });
        \Storage::extend('google', function($app, $config) {
            // dd($config);
            $client = new \Google_Client();
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->refreshToken($config['refreshToken']);
            $client->fetchAccessTokenWithRefreshToken($config['refreshToken']);
            $service = new \Google_Service_Drive($client);
            $adapter = new \Hypweb\Flysystem\GoogleDrive\GoogleDriveAdapter($service, $config['folderId']);
            // dd($adapter);
            return new \League\Flysystem\Filesystem($adapter);
        });
    }
}
