<?php
    namespace Drupal\nfl_search\Form;
    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStateInterface;

    class nflAPI extends FormBase {

        const NFL_API_CONFIG_PAGE = 'nfl_api_config_page:values';

        public function getFormId() {
            return 'nfl_api_config_page';
        }

        public function buildForm(array $form, FormStateInterface $form_state) {
            $values = \Drupal::state()->get(self::NFL_API_CONFIG_PAGE);
            $form = [];

            $form['api_base_url'] = [
                '#type' => 'textfield',
                '#title' => $this->t('API Base URL'),
                '#description' => $this->t('This is the URL for the API'),
                '#required' => TRUE,
                '#default_value' => $values['api_base_url'],
            ];

            $form['api_key'] = [
                '#type' => 'textfield',
                '#title'=> $this->t('API Key'),
                '#description' => $this->t('This is the key to access the API'),
                '#required' => TRUE,
                '#default_value' => $values['api_key'],
            ];

            $form['submit'] = [  '#type' => 'submit',  '#value' => $this->t('Save'),  '#attributes' => [    'class' => ['my-custom-class'],
            'id' => 'my-submit-button',
          ],
        ];
        

            return $form;
        }

        public function submitForm(array &$form, FormStateInterface $form_state){
            $submitted_values = $form_state->cleanValues()->getValues();
            \Drupal::state()->set(self::NFL_API_CONFIG_PAGE, $submitted_values);

            $messenger = \Drupal::service('messenger');
            $messenger->addMessage($this->t('Your new configuration has been saved'));
        }
    }