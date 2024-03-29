<?php
namespace Drupal\nfl_search\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\nfl_search\NflAPIConnector;

class SearchResultsController extends ControllerBase {
  /*public function searchForm(){
    $build = [
      '#theme' => 'nfl_search_form',
      '#attached' => [
        'library' => [
          'nfl_search/nfl_search'
        ]
      ]
    ];
    return $build;
  }*/

  //NflAPIConnector has a similar function declared called searchAthletes()
  public function searchResults() {
    //If there's a search value and it's not NULL return that, or return an empty string.
    $search = $_GET['search'] ?? '';
    //Get athlete IDs from the settings.yml file.
    $athlete_ids = $this->config('nfl_search.settings')->get('athlete_ids');
    //Instantiate the NflAPIConnector class
    $nfl_api_connector = new NflAPIConnector();
    //Get the results from making the HTTP request via the API Conenctor.
    $results = $nfl_api_connector->searchAthletes($search, $athlete_ids);
    //\Drupal::messenger()->addMessage($this->t('Hello'));
    //Return results with styling applied.
    return $this->displaySearchResults($results);
  }
  //Display search results with the applied styling.
  public function displaySearchResults($results) {
    $output = '';
  
    foreach ($results as $result) {
      $output .= '<div class="card">';
      $output .= '<div class="card-header">' . $result['fullName'] . '</div>';
      $output .= '<div class="card-body">';
      $output .= '<p><strong>Team:</strong> ' . $result['team'] . '</p>';
      $output .= '<p><strong>Position:</strong> ' . $result['position']->name . '</p>';
      $output .= '<p><strong>Height:</strong> ' . $result['height'] . '</p>';
      $output .= '<p><strong>Weight:</strong> ' . $result['weight'] . '</p>';
      $output .= '</div>';
      $output .= '</div>';
    }
  
    return $output;
  }
}