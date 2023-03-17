<?php
namespace Drupal\nfl_search;
use Drupal\nfl_search\Form\nflAPI;
use Exception;
use GuzzleHttp\Exception\RequestException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

    class NflAPIConnector {
        private $client;
        private $query;
        private $logger;
        
        public function __construct(\Drupal\Core\Http\ClientFactory $client, LoggerInterface $logger){
            $nfl_api_config = \Drupal::state()->get(nflAPI::NFL_API_CONFIG_PAGE);
            $api_url = ($nfl_api_config['api_base_url']) ?: '';
            $api_key = ($nfl_api_config['api_key']) ?: '';
            
            $query = ['api_key' => $api_key];
            $this->query = $query;
            $this->client = $client->fromOptions(
                [
                    'base_uri' => $api_url,
                    'query' => $query,
                ]
            );
            $this->logger = $logger;
        }

        public function teamStats(){
            $data = [];
            $endpoint = '/3/teamStats';
            $options = ['query' => $this->query];
            try{
                $request = $this->client->get($endpoint, $options);
                $result = $request->getBody()->getContents();
                $data = json_decode($result);
            }
            catch(Exception $e){
                $this->logger->error('Request Error: {message}', ['message' => $e->getMessage()]);
                //throw new HttpException(Response::HTTP_NOT_FOUND, 'Resource not found', $e);
            }
            
            return $data;
        }
    }