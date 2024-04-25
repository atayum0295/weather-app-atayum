<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class TouristSpot extends BaseController
{
   protected $apiUrl = 'https://api.foursquare.com/v3/places';
   protected $authorizationId = 'fsq3yADlg8aCyel62KLIDrzfXTbkxpmhf4WgKtdsxIGqtzE=';
   protected $fields = 'fsq_id,name,location,categories,photos,hours,rating,website';
   protected $limit = 30;
   protected $near = array();
   protected $placeSearch = '';


    public function __construct($placeSearch = '', $near = [])
    {
      $this->placeSearch = $placeSearch;
      $this->near = $near;
    }

   public function getPlaceInformation()
   {
      $touristSpots = $this->getInformations();
      return $touristSpots;
   }

   private function getInformations()
   {
      $data = array();
      foreach ($this->near as $key => $val_location) {
        $requestUrl =  $this->apiUrl .'/search?query='. 
                       $this->placeSearch .'&near=' . 
                       $val_location . '&limit='. 
                       $this->limit .'&fields='. 
                       $this->fields;
       $apiRequest = new ApiRequest($requestUrl,$this->authorizationId);
       $jsonResponse = json_decode($apiRequest->getApiResponse(),true);

       array_push($data,$jsonResponse);
      }

      $touristSpots = array();
      foreach ($data as $key => $value) {
          $locationInfo['latitude'] = $this->checkContent(@$value['context']['geo_bounds']['circle']['center']['latitude']);
          $locationInfo['longitude'] = $this->checkContent(@$value['context']['geo_bounds']['circle']['center']['longitude']);

          foreach ($value['results'] as $key => $valTouristInfo) {
             $locationInfo['ratings'] = $this->checkContent(@$valTouristInfo['rating'],'int') * 100 / 10;
            // if ($locationInfo['ratings'] > 80) { // we can set the limit of ratings here to be displayed
                $locationInfo['fsq_id'] = @$valTouristInfo['fsq_id'];
                $locationInfo['name'] = $this->checkContent(@$valTouristInfo['name']);
                $locationInfo['address'] = $this->checkContent(@$valTouristInfo['location']['formatted_address']);
                $locationInfo['locality'] = $this->checkContent(@$valTouristInfo['location']['locality']);
                $locationInfo['website'] = $this->checkContent(@$valTouristInfo['website']); 
                if (!empty(@$valTouristInfo['photos'])) {
                  $locationInfo['location_image'] = $this->checkContent(@$valTouristInfo['photos'][0]['prefix']."250x250".$valTouristInfo['photos'][0]['suffix'],'img');  
                }else{
                  $locationInfo['location_image'] = '/img/default.jpg';
                }
                $locationInfo['category'] = $this->checkContent(@$valTouristInfo['categories'][0]['plural_name']);
                $locationInfo['category_short_name'] = $this->checkContent(@$valTouristInfo['categories'][0]['short_name']);
                $locationInfo['icon_prefix'] = $this->checkContent(@$valTouristInfo['categories'][0]['icon']['prefix']);
                $locationInfo['icon_suffix'] = $this->checkContent(@$valTouristInfo['categories'][0]['icon']['suffix']);
                array_push($touristSpots,$locationInfo);
           //  }

         }
      }
         return $touristSpots;
   }

   private function checkContent($content = '',$type = ''){
      if (empty($content)) {

        if ($type = 'int') {
           $content = 0;
        }elseif ($type = 'img') {
           $content = '/img/default.jpg';
        }else{
           $content = '';
        }

      }

      return $content;
   }


}
