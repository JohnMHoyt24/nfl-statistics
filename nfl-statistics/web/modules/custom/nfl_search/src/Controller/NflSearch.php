<?php
    namespace Drupal\nfl_search\Controller;
    use Drupal\Core\Controller\ControllerBase;
    
    class NflSearch extends ControllerBase{
        public function view() {
          $this->listStats();
          $content = [];
          $content['name'] = 'My name is John';

            return[
              '#theme' => 'nfl-search',
              '#content' => $content,
            ];
          }

        public function listStats(){
          $nfl_api_connector_service = \Drupal::service('nfl_search.api_connector');
          $nfl_list = $nfl_api_connector_service->teamStats();
        }
    }