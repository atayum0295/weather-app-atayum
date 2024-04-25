<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class WeatherData extends BaseController
{
   protected $apiUrl = 'https://api.openweathermap.org/data/2.5/forecast?';
   protected $apiAppid = '1dbd865ecd287b51f4c1a46d70a77f96';
   protected $location = '';
   protected $lat = '';
   protected $lon = '';


    public function __construct($location = '', $lat = '' ,$lon = '')
    {
        $this->location = $location;
        $this->lat = $lat;
        $this->lon = $lon;
    }

   public function getWeather()
   {
       $currentWeather = $this->getCurrentWeather();
       return $currentWeather;
   }

   private function getWeatherData(){
       $data['message'] = "";

      $locationValidation = $this->locationValidation();
      if ($locationValidation['is_empty'] == 0  && $locationValidation['location_type'] == 1 ) { //geo location
          $requestUrl = $this->apiUrl . 'appid='. 
                        $this->apiAppid . '&lat='. 
                        $this->lat .'&lon=' . 
                        $this->lon;
      }elseif ($locationValidation['is_empty'] == 0  && $locationValidation['location_type'] == 2) {  //place location
          $requestUrl = $this->apiUrl . 'appid='. 
                        $this->apiAppid . '&q=' . 
                        $this->location;
      }
       
       $apiRequest = new ApiRequest($requestUrl);
       $jsonResponse = $apiRequest->getApiResponse();
       $data    = json_decode( $jsonResponse, true );

       if ($data['cod'] == "404") {
         $data['message'] = "Location not found";
         $data['is_error'] = 1;
       }

       return $data;
   }

   public function getFiveDayWeather(){
       $weatherInfo = $this->getWeatherData();
       $fiveDayWeather = array();

       foreach ($weatherInfo['list'] as $key => $valWeatherInfo) {
         $dtHours = date('H:i:s', strtotime($valWeatherInfo['dt_txt']));
         if ($dtHours  == "00:00:00") {
            array_push($fiveDayWeather,$valWeatherInfo);
         }
       }

       return $fiveDayWeather;
   }

   private function getCurrentWeather(){
       $weatherInfo = $this->getWeatherData();
       $locationInfo = $this->getLocationInfo();

       if ($weatherInfo['cod'] == 200) {
          $yourCurrentDate = date("Y-m-d H:i:s");
          $timezone = $locationInfo['country']['timezone'];
          $longCurrentDate = strtotime($yourCurrentDate);
          $longCountryDate = $timezone +  $longCurrentDate;
          $countryDate = date('Y-m-d H:i:s', $longCountryDate);
          $date_format = date('l - F d, Y', $longCountryDate);
          $data['date_format'] = $date_format;
          $data['country_date'] = $countryDate;
          $data['location_name'] = $locationInfo['country']['name'];
          $data['location_acronym'] = $locationInfo['country']['country'];
          $data['location_country'] = $locationInfo['country']['country'];
          $data["sunrise"] =  date("H:i", $locationInfo['country']['sunrise'] + $locationInfo['country']['timezone']);
          $data['sunset'] = date("H:i", $locationInfo['country']['sunset'] + $locationInfo['country']['timezone']);
          $data['coor_lat'] = $locationInfo['country']['coord']['lat'];
          $data['coor_lon'] = $locationInfo['country']['coord']['lon'];
          $current = $weatherInfo["list"][0];
          $data['dt_text_current'] = date("H:i A",$longCountryDate);
          $data['current'] = $current['main'];
          $data['weather'] = $current['weather'][0];
          $data['wind'] = $current['wind'];
      }else{
         $data = $weatherInfo;
      }

      return $data;
   }


   private function getLocationInfo(){
      $weatherInfo['cod'] = 0;
      $weatherInfo = $this->getWeatherData();
      if ($weatherInfo['cod'] == 200) {
         $locationInfo['country'] = $weatherInfo['city'];
      }else{
         $locationInfo = $weatherInfo;
      }
      
      return $locationInfo;
   }

   private function locationValidation(){
     $status['message'] = "";
     $status['location_type'] = 0;
     $status['is_empty'] = 1;

     if ($this->location == "" && $this->lat == "" && $this->lon == "") {
         $status['message'] = "Location cannot be empty, Please select location.";
         $status['location_type'] = 0;
         $status['is_empty'] = 1;
     }else{
         if ($this->lat != "" && $this->lon != "")  {
            $status['location_type'] = 1; // 'geo location'
            $status['is_empty'] = 0;
         }elseif($this->location != ""){
            $status['location_type'] = 2; //'place location'
            $status['is_empty'] = 0;
         }
      }

      return $status;
   }

   private function getWeatherIcon($icon_code = ""){
      $icon = '<img src="http://openweathermap.org/img/w/' . $icon_code . '.png" class="weather-icon" />';
      return $icon;
   }



}
