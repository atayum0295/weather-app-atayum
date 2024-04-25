<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class Home extends BaseController
{
   private $country = 'japan'; //filtered
   private $cities = array('Tokyo', 'Yokohama', 'Kyoto', 'Osaka', 'Sapporo', 'Nagoya'); //filtered

   public function index(){
       $data['cities'] = $this->cities;
       $this->template('index','/today_weather_scripts',$data);
   }

   public function fiveDayWeather(){ // here
          $WeatherData  = new WeatherData($this->country);
          $data["arr_five_day_weather"] = $WeatherData->getFiveDayWeather();
          echo view("five_day_weather", $data);
   }

   public function getTouristSpot(request $request){
        if ($request->place_search != "") {
            $placeSearch = $request->place_search;
        }else{
            $placeSearch = "hotel";
        }

        if ($request->near != "") {
            $near = array($request->near);
        }else{
            $near = $this->cities;
        }

        $TouristSpot  = new TouristSpot($placeSearch,$near);
        $placesInformations['places_informations'] = $TouristSpot->getPlaceInformation();
        echo view("tourist_spot", $placesInformations);
   }

   public function getCurrentWeather(){ // here
        $WeatherData = new WeatherData($this->country);
        $currentWeather = $WeatherData->getWeather();
        return json_encode($currentWeather);
   }


   public function getWeatherPerCity(request $request){ // here
        $WeatherData = new WeatherData($this->country,$request->lat,$request->lon);
        $currentWeather = $WeatherData->getWeather();
        $data = $currentWeather;

        echo view("current_city_Weather", $data);
   }



   private function template(string $page,$js = null,$data = null){ 
        echo view('templates/header');
        echo view($page, $data);
        echo view('templates/footer');
        if (!is_null($js)) {
          echo view('scripts/'. $js, $data);
        }
   }

   
}
