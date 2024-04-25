
        <div id="grad1" class=" content " style="background-color: #FFFFFF ;">
            <!-- Navbar Start -->

            <nav id="grad1" class="navbar navbar-expand bg-light navbar-light sticky-top px-5 py-0 box-shadow">

                <h5><img src="/img/system-logo.png"></h5>
                <hr>

                <div class="navbar-nav align-items-center ms-auto">
                 <div class="row">
                    <div class="text-dark col-sm-12 px-2" id="current_date_info"></div>
                 </div>

                </div>

            </nav>
            <!-- Navbar End -->

            <div class=" pt-5 px-4 ">
                <div class="row mb-5">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="mb-0 text-secondary" style="font-style:italic;"><span class="location"></span> Weather Today</h6>
                    </div>

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-8 " >

                            <div class="row mb-4" >
                                    <div class="col-lg-12 col-md-12  col-xs-12 col-12">

                                        <div id="grad1" class="rounded d-flex align-items-center box-shadow">
                                            
                                            <div class="container header">
                                                <div class="row   ">
                                                    <div class="col-lg-12 col-md-12  col-xs-12 col-12 p-3">
                                                        <div class="row" >



                                                            <div class="col-lg-3 col-md-3  col-xs-3 col-3" style="text-align: center;">
                                                                <h6 class="text-secondary "><span id="current_weather_desc"><span></h6>
                                                                <div class="row">
                                                                    <span id="current_weather_icon"></span>

                                                                </div>
                                                            </div>


                                                            
                                                            <div class="col-lg-5 col-md-5  col-xs-4 col-4 mb-2" >
                                                                <h1 class="mb-0 " ><span id="current_temp_f" style="font-family: serif">-</span> &deg;F</h1>
                                                                <p class="mb-0 "><i class="fas fa-male"></i> <span style="font-size: 14px;" > Feels Like 
                                                                    <span id="current_feels_f"></span> &deg;F </span>
                                                                </p>
                                                                <h1 class="mb-0"><span id="current_temp_c" style="font-family: serif">-</span> &deg;C</h1>
                                                                <p class="mb-0"><i class="fas fa-male"></i> <span style="font-size: 14px;" > Feels Like 
                                                                    <span id="current_feels_c" ></span>&deg;C </span>
                                                                </p>
                                                            </div>

                                                            <div class="col-lg-3 col-md-3  col-xs-4 col-4 ">
                                                                <h6 class="mb-0"style="font-weight: bold;"> Humidity</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-tint"></i> <span id="current_humidity"></span><span style="font-size: 12px;"> %</span></p>

                                                                <h6 class="mb-0"style="font-weight: bold;"> Wind Speed</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-wind"></i> <span id="current_wind_speed"></span><span style="font-size: 12px;"> meter/sec</span></p>

                                                                <h6 class="mb-0"style="font-weight: bold;">Pressure</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-tachometer-alt"></i> <span id="current_pressure"></span><span style="font-size: 12px;"> hPa</span></p>

                                                            </div>


                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>


                        <div  class="row mb-4">
                            <div class="col-sm-3 col-xl-3">
                                <div id="grad2" class=" rounded d-flex align-items-center justify-content-between p-2 box-shadow" >
                                     <img class="rounded float-left"  src="/img/temp_min.png" height="40px">
                                    <div class="ms-0">
                                        <p class="mb-0">Min</p>
                                        <h6 class="mb-0"><span id="current_temp_min"></span>&deg;C</h6>
                                    </div>

                                </div>
                            </div>


                            <div class="col-sm-3 col-xl-3 ">
                                <div id="grad2" class="rounded d-flex align-items-center justify-content-between p-2 box-shadow" >

                                    <img src="/img/temp_max.png" height="40px">
                                    <div class="ms-0">
                                        <p class="mb-0">Max</p>
                                        <h6 class="mb-0"><span id="current_temp_max"></span>&deg;C</h6>
                                    </div>

                                </div>
                            </div>
        

                            <div class="col-sm-3 col-xl-3">
                                <div id="grad2" class=" rounded d-flex align-items-center justify-content-between p-2 box-shadow" >
                                     <img src="https://cdn-icons-png.freepik.com/512/8179/8179067.png" height="40px">
                                    <div class="ms-0">
                                        <p class="mb-0">Sunrise</p>
                                        <h6 class="mb-0" id="sunrise_today">00:00 AM</h6>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-3 col-xl-3">
                                <div class="col-sm-12 col-xl-12">
                                    <div id="grad2" class=" rounded d-flex align-items-center justify-content-between p-2 box-shadow" >
                                         <img src="https://cdn.icon-icons.com/icons2/1370/PNG/512/if-weather-26-2682825_90789.png" height="40px">
                                        <div class="ms-0">
                                            <p class="mb-0">Sunset</p>
                                            <h6 class="mb-0" id="sunset_today">00:00 PM</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-8 mb-4 col-12 mb-5" style="padding-left: 15px;">
                        <div id="grad3" class="h-100 rounded  box-shadow" style="padding: 27px;">

                            <div id="five_day_weather"></div>

                        </div>
                    </div>




                    <div class="d-flex align-items-center justify-content-between mb-2 bg-light">
                        <h6 class="mb-0 text-secondary" style="font-style:italic;"><span class="location"></span> Tourist Spot</h6>
                    </div>



                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-12 col-2 " style="padding-left: 15px;">
                        <div id="" class="h-100 rounded p-4 box-shadow" >
                           
                            <div class="row">

                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 mb-2 col-2">
                                    <select class="form-control" name="place_name" id="place_name">
                                      <option value="">All Categories</option>
                                            <?php foreach ($cities as $key => $_cities): ?>
                                                  <option value="{{$_cities}}">{{$_cities}}</option>
                                             <?php endforeach ?>
                                    </select>
                                    

                                </div>


                                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 mb-2 col-2">
                                    <input id="place_to_visit" class="form-control" type="text"  placeholder="Place or category to visit" value="" >
                                </div>


                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 mb-4 col-2">
                                    <button type="button"  id="search_place" class="btn btn-primary ms-0"  >Search</button>
                                </div>

                                <div class="loading_search col-lg-1 col-md-1 col-sm-1 col-xs-1 mb-4 col-2">
          
                                        <div class="waitpage2-box">
                                                <img alt="(Loading)" src="\img\loading.gif" width="40px" height="40px">
                                        </div>
                             
                                </div>

                            </div>

                            <div id="tourist_spot"></div>

                           

                        </div>
                    </div>




                </div>

            </div>



















    
            <div class="loading_page_div" >
                <div class="waitpage" id="waitpage"></div>

                <div class="waitpage-box">
                        <img alt="(Loading)" src="\img\loading.gif" width="120px" height="120px">
                        <div class="text-light"><b>Please wait...</b></div>
                </div>
            </div>

        </div>



    </div>

