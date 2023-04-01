<?php
namespace Drupal\nfl_search;
class NflAPIConnector {

public function search($search, $athlete_ids) {
  $results = array();

  // Loop through each athlete ID and make an API call for each one.
  foreach ($athlete_ids as $athlete_id) {
    // Make the API call.
    $api_url = "https://site.web.api.espn.com/apis/common/v3/sports/football/nfl/athletes?q={$search}&athlete_id={$athlete_id}";
    $response = file_get_contents($api_url);

    // Parse the API response.
    $json_response = json_decode($response, true);
    $results = array_merge($results, $json_response);
  }

  return $results;
}

}