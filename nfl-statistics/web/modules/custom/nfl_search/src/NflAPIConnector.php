<?php
namespace Drupal\nfl_search;

class NflAPIConnector {
  const API_BASE_URL = 'https://sports.core.api.espn.com/v2/sports/football/leagues/nfl/athletes';

  public function searchAthletes($search, $athlete_ids) {
    $query_params = [
      'search' => $search,
      'athleteIds' => explode(',', $athlete_ids ?? ''),
    ];

    $url = self::API_BASE_URL . '?' . http_build_query($query_params);
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    return $data;
  }
}