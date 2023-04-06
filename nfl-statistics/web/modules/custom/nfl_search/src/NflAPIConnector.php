<?php
namespace Drupal\nfl_search;

class NflAPIConnector {
  const API_BASE_URL = 'https://sports.core.api.espn.com/v2/sports/football/leagues/nfl/athletes';

  public function searchAthletes($search, $athlete_ids) {
    $query_params = [
      //There are two parameters that are added to the base URL.
      'search' => $search,
      'athleteIds' => explode(',', $athlete_ids ?? ''),
    ];
    //Take the base URL and concatenate the parameters
    $url = self::API_BASE_URL . '?' . http_build_query($query_params);
    //Get the contents from the URL and convert it to a JSON string.
    $response = file_get_contents($url);
    //Converts data from JSON string to a PHP value.
    $data = json_decode($response);

    return $data;
  }
}