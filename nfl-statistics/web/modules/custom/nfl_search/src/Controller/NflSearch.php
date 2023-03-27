<?php
    namespace Drupal\nfl_search\Controller;
    use Drupal\Core\Controller\ControllerBase;
    
    class NflSearch extends ControllerBase{
        public function view() {
          $this->listStats();
          $content = [];
          //$content['name'] = 'My name is John';
          $content['players'] = $this->createPlayerCard();

            return[
              '#theme' => 'nfl-search',
              '#content' => $content,
              '#attached' => [
                'library' => [
                  'nfl_search/nfl-search-styling'
                ]
              ]
            ];
          }

        public function listStats(){
          $nfl_api_connector_service = \Drupal::service('nfl_search.api_connector');
          $nfl_list = $nfl_api_connector_service->teamStats();
          if(!empty($nfl_list->player)){
            return $nfl_list->player;
          }else{
            return [];
          }
        }

        public function createPlayerCard(){
          $nfl_api_connector_service = \Drupal::service('nfl_search.api_connector');
          $playerCards = [];
          $players = $this->listStats();

          if(!empty($players)){
            foreach($players as $player){
              $content = [
                //In the player card twig file, each card element is coded as {{ content.property }}
                //image
                //Name
                //Team
                //Touchdowns
              ];
            }
          }
        }
    }