<?php

namespace Made\Multibot;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class MultibotClient{
    
    
    protected $client;
           
    public function __construct($base_uri, $timeout = 60.0) {    
        
        if(!isset($this->client)){
            $this->client = new Client([
                // Base URI is used with relative requests
                'base_uri' => $base_uri,
                // You can set any number of default request options.
                'timeout'  => $timeout,
            ]);
        }
    
    }
    /*
    
    public function getPagePDF($url,$width,$height){
        
               
        $body = new \stdClass();
        
        //Setting Body JSON for Rquest
        $body->url = $url;
        $body->width = $width;
        $body->height = $height;
        $body->scripts = true;
        $body->media = true;
        $body->screen = true;
        $body->format = "";

        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('POST', '/api/v1/data/pdf', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }
    
    
    public function getPageJSON($url,$width,$height,$scripts,$media,$schema,$auth = null,$cmd = null){
        
        $body = new \stdClass();
        
        $body->url = $url;
        $body->width = $width;
        $body->height = $height;
        $body->scripts = $scripts;
        $body->media = $media;
        
        if(isset($auth))
            $body->auth = $auth;
        if(isset($cmd))
            $body->cmd = $cmd;
        
        $body->schemaGroup = $schema;

        $bodyJSON = json_encode($body);
        


        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('POST', '/api/v1/data/json', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  

        
        
    }


    */


    public function getInfoBot($idBot){
                  
        $body = new \stdClass();
        
        //Setting Body JSON for Rquest
        $body->id_cache = $idBot;

        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('GET', '/bot/info', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }

    public function getAllInfoBot(){
                  
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('GET', '/bot/info/all', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }
    


    public function startBot($idBot){
        
        $body = new \stdClass();
        
        $body->id_cache = $idBot;
        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('POST', '/bot/start', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  

        
        
    }


    public function stopBot($idBot){
        
        $body = new \stdClass();
        
        $body->id_cache = $idBot;
        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('POST', '/bot/stop', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }


    public function setBot($idBot,$token_face,$instagram_id,$first_message,$last_message,$num_tags){
        
        $body = new \stdClass();
        
        $body->id_cache = $idBot;
        $body->token_face = $token_face;
        $body->instagram_id = $instagram_id;
        $body->first_message = $first_message;
        $body->last_message = $last_message; 
        $body->num_tags = $num_tags;

        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('POST', '/bot/set', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }


    public function deleteCommentsBot($idBot){
        
        $body = new \stdClass();
        
        $body->id_cache = $idBot;
        $bodyJSON = json_encode($body);
        
        $headers = ['Content-Type' => 'application/json' ];
        
        $request = new Request('DELETE', '/bot/comments/id', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }

 
}

