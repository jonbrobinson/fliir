<?php
/**
 * Created by PhpStorm.
 * User: Jonbrobinson
 * Date: 8/10/15
 * Time: 10:40 PM
 */

namespace App\Fliir\Services\Events;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Psr7\Request;

class EventRepository
{
    protected $client;

    /**
     *
     */
    public function __construct()
    {
        $this->client = new Guzzle([
            "base_uri"    => "https://www.eventbriteapi.com/v3/"
        ]);

        $this->token = env("EVBRITE_OATH_PERSONAL", "BadToken");
    }

    public function getAll()
    {
        $options = [
            "headers" => array(
                "Authorization" => "Bearer " . $this->token,
                "Content-Type" => "application/json"
            ),
            "query" => array(
                "venue.city" => "austin"
            )
        ];
        $url = 'https://www.eventbriteapi.com/v3/events/search/' ;
        $request = new Request('GET', $url);

        $response = $this->client->send($request, $options);
        return $response->getBody()->getContents();
    }

    public function yes()
    {
        $test = true;

        return $test;
    }
}