<?php
    namespace Drupal\nfl_search\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;
    use Drupal\nfl_search\NflAPIConnector;
    use Symfony\Component\DependencyInjection\ContainerInterface;

    class nflAPI extends FormBase {

        //const NFL_API_CONFIG_PAGE = 'nfl_api_config_page:values';
        private $apiConnector;

        public function __construct(NflAPIConnector $api_connector){
            $this->apiConnector = $api_connector;
        }

        public static function create(ContainerInterface $container){
            return new static(
                $container->get('nfl_search.api_connector')
            );
        }

        public function getFormId() {
            return 'nfl_search_find_athletes';
        }

        public function buildForm(array $form, FormStateInterface $form_state) {
            //$values = \Drupal::state()->get(self::NFL_API_CONFIG_PAGE);
            $form = [];

            /*$form['api_base_url'] = [
                '#type' => 'textfield',
                '#title' => $this->t('API Base URL'),
                '#description' => $this->t('This is the URL for the API'),
                '#required' => TRUE,
                '#default_value' => $values['api_base_url'],
            ];*/

            /*$form['api_key'] = [
                '#type' => 'textfield',
                '#title'=> $this->t('API Key'),
                '#description' => $this->t('This is the key to access the API'),
                '#required' => TRUE,
                '#default_value' => $values['api_key'],
            ];*/

            $form['search'] = array(
                '#type' => 'textfield',
                '#title' => $this->t('Search for an athlete'),
                '#required' => true,
            );

            $form['submit'] = array(
                '#type' => 'submit',
                '#value' => $this->t('Search'),
              );
        
            return $form;
        }

        public function submitForm(array &$form, FormStateInterface $form_state) {
            // Get the search query entered by the user.
           $search = $form_state->getValue('search');
           $athlete_ids = \Drupal::config('nfl_search.settings')->get('athlete_ids');
           $api_data = $this->apiConnector->searchAthletes($search, $athlete_ids);

           return $api_data;
          }
    }