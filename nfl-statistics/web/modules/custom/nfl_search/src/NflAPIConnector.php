<?php
namespace Drupal\nfl_search;
require __DIR__ . '/vendor/autoload.php';
use Curl\Curl;
class NflAPIConnector{
    private $base_url;

    public function __construct(){
        //Initialize the base URL for the API.
        $this->base_url = 'https://sports.core.api.espn.com';
    }

    public function search($keywords){
        //Build the URL for the athlete API endpoint.
        $url = $this->base_url.'/sports/football/leagues/nfl/athletes/search?q='.urlencode($keywords);
        //Perform the athlete request using the cURL library.
        $response = $this->makeRequest($url);
        //Process the response data and return the athlete information.
        $athlete = $this->parseResponse($response);
        return $athlete;
    }

    private function makeRequest($url){
        $curl = curl_init();
        //Set the options for the cURL request
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        //Execute the cURL request
        $response = curl_exec($curl);
        //End the cURL session
        curl_close($curl);
        //Return the response data
        return $response;
    }

    private function parseResponse($response){
        //Process the response data and return the athlete information.
        //Data needs to be decoded from JSON to string.
        $data = json_decode($response, true);
        $athletes = array();
        foreach($data['items'] as $item){
            $athletes[] = array(
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'team' => $data['team'],
                'displayWeight' => $data['displayWeight'],
                'displayHeight' => $data['displayHeight'],
                'jersey' => $data['jersey']
            );
        }
        return $athletes;
    }
}