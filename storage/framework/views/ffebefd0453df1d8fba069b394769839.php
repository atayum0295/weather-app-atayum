
                                       
                                                    <div class="col-lg-12 col-md-12  col-xs-12 col-12 p-3 bg-light">

                                                        <div class="row mb-4 ">
                                                            <div class="col-lg-12 d-flex justify-content-center" >
                                                                <h6><?php echo e($location_name); ?> - <small style="font-style:italic;font-size: 14px">(<?php echo e($date_format); ?> <?php echo e($dt_text_current); ?>)</h6></small></div>    
                                                        </div>


                                                        <div class="row" >


                                                            <div class="col-lg-3 col-md-3  col-xs-3 col-3" style="text-align: center;">
                                                                <h6 class="text-secondary "><span id=""><?php echo e($weather['description']); ?><span></h6>
                                                                <div class="row">
                                                                    <span id=""><img class='img-fluid' alt='Responsive image' src='/img/<?php echo e($weather["icon"]); ?>.png' height='100px' width='140px'></span>

                                                                </div>
                                                            </div>


                                                            
                                                            <div class="col-lg-5 col-md-5  col-xs-4 col-4 mb-2" >
                                                                <h1 class="mb-0 " ><span id="" style="font-family: serif"><?php echo e(9/5*($current['temp']-273.15)+32); ?></span> &deg;F</h1>
                                                                <p class="mb-0 "><i class="fas fa-male"></i> <span style="font-size: 14px;" > Feels Like 
                                                                    <span id=""></span><?php echo e($current['feels_like']); ?> &deg;F </span>
                                                                </p>
                                                                <h1 class="mb-0"><span id="" style="font-family: serif"><?php echo e($current['temp']- 273.15); ?></span> &deg;C</h1>
                                                                <p class="mb-0"><i class="fas fa-male"></i> <span style="font-size: 14px;" > Feels Like 
                                                                    <span id="" ><?php echo e($current['feels_like']); ?></span>&deg;C </span>
                                                                </p>
                                                            </div>

                                                            <div class="col-lg-3 col-md-3  col-xs-4 col-4 ">
                                                                <h6 class="mb-0"style="font-weight: bold;"> Humidity</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-tint"></i> <span id=""><?php echo e($current['humidity']); ?></span><span style="font-size: 12px;"> %</span></p>

                                                                <h6 class="mb-0"style="font-weight: bold;"> Wind Speed</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-wind"></i> <span id=""><?php echo e($wind['speed']); ?></span><span style="font-size: 12px;"> meter/sec</span></p>

                                                                <h6 class="mb-0"style="font-weight: bold;">Pressure</h6>
                                                                <p class="mb-2" style="font-style: italic;"><i class="fas fa-tachometer-alt"></i> <span id=""><?php echo e($current['pressure']); ?></span><span style="font-size: 12px;"> hPa</span></p>

                                                            </div>


                                                        </div>
                                                    </div>  
                                        
<?php /**PATH C:\xampp\htdocs\weather-app\resources\views/current_city_Weather.blade.php ENDPATH**/ ?>