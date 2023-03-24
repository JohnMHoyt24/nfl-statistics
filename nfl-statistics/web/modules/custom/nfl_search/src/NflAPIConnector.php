<?php
namespace Drupal\nfl_search;
use Drupal\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Http\ClientFactory;
use Drupal\nfl_search\Form\nflAPI;
use Exception;

    class NflAPIConnector {
        /*Tried testing API via Postman. Got an error message.
             "message": "You are not subscribed to this API."
        Need to subscribe to the API.
        */
        private $client; //The HTTP client that communicates to the API
        private $query; 
        private $logger;
        
        public function __construct(ClientFactory $client){
            $nfl_api_config = \Drupal::state()->get(nflAPI::NFL_API_CONFIG_PAGE);
            $api_url = ($nfl_api_config['api_base_url']) ?: 'https://api-american-football.p.rapidapi.com';
            $api_key = ($nfl_api_config['api_key']) ?: '';
            
            $query = ['api_key' => $api_key];
            $this->query = $query;

            $this->client = $client->fromOptions(
                [
                    'base_uri' => $api_url,
                    'query' => $query,
                ]
            );
            
        }

        public static function create(ContainerInterface $container){
            return new static(
                $container->get('nfl_search.api_connector')
            );
        }

        public function teamStats(){
            $data = [];
            $endpoint = '/players/statistics';
            $options = ['query' => $this->query];
            try{
                $request = $this->client->get($endpoint, $options);
                $result = $request->getBody()->getContents(); //Originally declared, $result
                $data = json_decode($result);
            }
            catch(Exception $e){
                //$this->logger->error('Request Error: {message}', ['message' => $e->getMessage()]);
                $e = 'Resource not found.';
                echo $e;
            }
            
            return $data;
        }
    }