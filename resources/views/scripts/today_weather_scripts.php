 <script>   
    $(document).ready(function(){ 
        $('select option[value="Tokyo"]').attr("selected",true); //default
        currentWeather();
        loadFiveDayWeather(); 
        loadTouristSpot('hotel',$('#place_name').val());
    });

        function loadFiveDayWeather(){
            $.get('<?php echo "/fiveday-weather" ?>',
              function(data){
                $("#five_day_weather").html(data);  
            }); 
        }

        function loadTouristSpot(place_search = '', near = '' ){
          $('.loading_search').show();
            $.get('<?php echo "/tourist-spot?place_search="?>' + place_search + '&near=' +near  ,
              function(data){
                $("#tourist_spot").html(data);  
                loadPlace();
                $('.loading_search').hide();
            }); 
        }

        $(document).on('click', '#search_place', function (e) {
            var place_search= $('#place_to_visit').val() ;
            var near= $('#place_name').val() ;
            loadTouristSpot(place_search,near);
        }); 

        $(document).on('click', '.weather_per_loc', function (e) {
            lat = $(this).data('latitude') ;
            lon = $(this).data('longitude') ;

                        var  weather_per_loc =  
                        $.confirm({
                        icon: 'fa fa-file icon-lg',
                        title: 'Weather Condition' ,
                        content: 'url:city-weather?lat='+lat +'&lon='+lon,
                        boxWidth: '50%',
                        columnClass: 'small',
                        useBootstrap: false,
                            onContentReady: function(){

                            },

                            buttons: { 
                              formSubmit: {
                              text: 'close',
                              btnClass: 'btn-blue',
                                action: function () {

                                }
                                },
                                
                              }

                        });
        }); 

        

       function currentWeather() { 
            $('.loading_page_div').show();
          $.get('<?php echo "/current-weather" ?>',
              function(data){

                 data = JSON.parse(data);

                if (data.is_error == "1") { 
                     alert(data.message);
                     $('.loading_page_div').hide();     
                } else {
                      $("#sunrise_today").html(data.sunrise);
                      $("#sunset_today").html(data.sunset);
                      $(".location").html(data.location_name);
                      $("#current_date_info").html(data.date_format + " " + data.dt_text_current + " " + data.location_acronym );
                      $("#current_temp_f").html(getConvertTemp(data.current.temp,"F"));
                      $("#current_temp_c").html(getConvertTemp(data.current.temp,"C"));
                      $("#current_humidity").html(data.current.humidity);
                      $("#current_wind_speed").html(data.wind.speed);
                      $("#current_pressure").html(data.current.pressure);
                      $("#current_feels_f").html(getConvertTemp(data.current.feels_like,"F"));
                      $("#current_feels_c").html(getConvertTemp(data.current.feels_like,"C"));
                      $("#current_temp_min").html(getConvertTemp(data.current.temp_min,"C"));
                      $("#current_temp_max").html(getConvertTemp(data.current.temp_max,"C"));
                      $("#current_weather_icon").html("<img class='img-fluid' alt='Responsive image' src='/img/" +  data.weather.icon + ".png' height='220px' width='240px'>");
                      description = data.weather.description;
                      description =description.charAt(0).toUpperCase() + description.slice(1);
                      $("#current_weather_desc").html(description);

                      $('.loading_page_div').hide();
                }


          });  

        }


        function loadPlace(){
           var table =  $('#placeinfo').dataTable( {
                    "responsive": true,
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bInfo": true,
                    "pageLength": 10,
                    "bAutoWidth": true,
                    "language": {
                    "paginate": {
                      "previous": '<i class="fas fa-chevron-left"></i>',
                      "next": '<i class="fas fa-chevron-right"></i>',
                      "first":'<i class="fas fa-angle-double-left"></i>',
                      "last":'<i class="fas fa-angle-double-right"></i>'

                    }
                }
             });
        }
        
        function getConvertTemp(kelvin = 0,type = null){
          if (type == "F") { //fahrenheit
             value = 9/5*(kelvin-273.15)+32;
          }else if (type == "C") { //Celcius
             value = ((kelvin) - 273.15);
          }
          return value.toFixed(2);
        }


</script>