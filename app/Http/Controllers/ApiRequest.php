<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class ApiRequest extends BaseController
{
   protected $url = '';
   protected $authorizationId = '';

   public function __construct($url = '', $authorizationId = '')
    {
      $this->url = $url;
      $this->authorizationId = $authorizationId;
    }

   public function getApiResponse()
   {
      $client = new \GuzzleHttp\Client();
      $response = $client->request('GET', 
         $this->url, [
           'headers' => [
           'Accept' => 'application/json',
           'Authorization' => $this->authorizationId,
          ], 
       ]);

      $data = $response->getBody();
      return $data;
   }

}
