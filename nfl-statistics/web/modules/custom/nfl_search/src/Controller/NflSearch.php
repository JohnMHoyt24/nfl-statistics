<?php
    namespace Drupal\nfl_search\Controller;
    use Drupal\Core\Controller\ControllerBase;
    
    class NflSearch extends ControllerBase{
        public function view() {
            return[
              '#type' => 'markup',
              '#markup' => $this->t('This is going to display NFL statistics')
            ];
          }
    }