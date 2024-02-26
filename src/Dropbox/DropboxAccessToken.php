<?php

namespace Azzarip\Utilities\Dropbox;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

$client = new Client();

class DropboxAccessToken
{
    private static function refresh()
    {
        $client = new Client();

        $response = $client->post('https://api.dropbox.com/oauth2/token', [
            'form_params' => [
                'refresh_token' => env('DROPBOX_REFRESH_TOKEN'),
                'grant_type' => 'refresh_token',
                'client_id' => env('DROPBOX_APP_KEY'),
                'client_secret' => env('DROPBOX_APP_SECRET'),
            ],
        ]);

        $body = $response->getBody();
        $bodyString = (string) $body;
        $data = json_decode($bodyString, true);

        return $data;
    }

    public static function get(){
        $token = Cache::get('dropbox_access_token');

        if($token === null){
            $data = self::refresh();
            Cache::put('dropbox_access_token', $data['access_token'], $data['expires_in']);
            return $data['access_token'];
        }

        return $token;
    }
}
