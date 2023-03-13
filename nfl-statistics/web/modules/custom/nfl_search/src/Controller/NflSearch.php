<?php
    namespace Drupal\nfl_search\Controller;
    use Drupal\Core\Controller\ControllerBase;
    
    class NflSearch extends ControllerBase{
        public function view() {
          $content = [];
          $content['name'] = 'My name is John';

            return[
              '#theme' => 'nfl-search',
              '#content' => $content,
            ];
          }
    }