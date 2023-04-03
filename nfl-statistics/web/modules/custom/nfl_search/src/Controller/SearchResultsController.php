<?php
namespace Drupal\nfl_search\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\nfl_search\NflAPIConnector;

class SearchResultsController extends ControllerBase {
  public function searchForm(){
    $build = [
      '#theme' => 'nfl_search_form',
      '#attached' => [
        'library' => [
          'nfl_search/nfl_search'
        ]
      ]
    ];
    return $build;
  }

  public function searchResults() {
    $search_terms = $_GET['search'] ?? '';
    $athlete_ids = $this->config('nfl_search.settings')->get('athlete_ids');
    $nfl_api_connector = new NflAPIConnector();
    $results = $nfl_api_connector->searchAthletes($search_terms, $athlete_ids);

    $build = [
      '#theme' => 'nfl_search_results',
      '#results' => $results,
      '#attached' => [
        'library' => [
          'nfl_search/nfl_search'
        ]
      ]
    ];
    return $build;
  }

}