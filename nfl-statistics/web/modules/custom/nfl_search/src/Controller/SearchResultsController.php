<?php
namespace Drupal\nfl_search\Controller;

use Drupal\Core\Controller\ControllerBase;

class SearchResultsController extends ControllerBase {

  public function displaySearchResults() {
    // Get the search term and athlete ID from Drupal variables.
    $search = \Drupal::request()->query->get('search');
    $athlete_ids = \Drupal::config('nfl_search.settings')->get('athlete_ids');

    // Call the API connector class and pass in the search term and athlete ID.
    $api_connector = \Drupal::service('nfl_search.api_connector');
    $results = $api_connector->search($search, $athlete_ids);

    // Pass the search results to the custom template.
    return [
      '#theme' => 'search_results',
      '#results' => $results,
    ];
  }

}