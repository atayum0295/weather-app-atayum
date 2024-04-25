


                        <?php foreach ($arr_five_day_weather as $key => $val_fiveDayWeather): ?>
                            <div class="d-flex align-items-center border-bottom py-1">
                                <img class=" flex-shrink-0" src="/img/<?php echo e($val_fiveDayWeather['weather'][0]['icon']); ?>.png" alt="" style="width: 60px; height:60px;">
                                <div class="w-100 ms-2">
                                    <div class="d-flex w-100 justify-content-between">
                                        <small><span><?php echo e($val_fiveDayWeather['main']['temp'] - 273.1); ?></span></span> &deg;C</small>
                                        <h6 class="mb-0"><?php echo e(date('l', $val_fiveDayWeather['dt'])); ?></h6>
                                    </div>
                                    <span><?php echo e($val_fiveDayWeather['weather'][0]['description']); ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>

<?php /**PATH C:\xampp\htdocs\weather-app\resources\views/five_day_weather.blade.php ENDPATH**/ ?>