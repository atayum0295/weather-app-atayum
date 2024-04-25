  
                                <table id="placeinfo" class="table table-striped text-nowrap table-hover " style="width:100%">
                                    <thead>
                                        <tr class="text-info">
                                            <th>Nearby places to visit</th>
                                            <th>Google Map</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($places_informations as $key => $val_places_informations): ?>
                                            <tr>
                                                <td style="word-break:break-all;white-space: normal;" width="920px">
                                                    <div class="col-sm-12 col-xl-12 ">
                                                            <div class="  d-flex align-items-center justify-content-between  " >
                                                                 <div class="d-flex align-items-center border-bottom ">
                                                                    <img  id="{{$val_places_informations['fsq_id']}}" class="thumbnail zoom rounded float-left box-shadow"  src="{{$val_places_informations['location_image']}}" height="140px" width="140px" loading="lazy">
                                                                    <div class="w-100 ms-4">

                                                                                <div class="d-flex w-100 justify-content-between ">
                                                                                   <h5>{{ $val_places_informations['name'] }}</h5> 
                                                                                </div>

                                                                                <div class="mb-4">
                                                                                    <h6 class="text-secondary"  style ="font-size: 12px;font-style: italic;" >
                                                                                    <i class="fas fa-map-marker-alt fa-lg"></i>
                                                                                    <span class="ms-2"> {{ $val_places_informations['address'] }}</span>
                                                                                    <button  class="btn btn-warning btn-icon btn-circle badge-sm ms-2 weather_per_loc" title ="View Weather Condition"  
                                                                                    data-latitude ="{{$val_places_informations['latitude']}}"
                                                                                    data-longitude ="{{$val_places_informations['longitude']}}">
                                                                                       <p style="font-size:9px;color:black;">{{$val_places_informations['locality']}}</p>
                                                                                    </button>
                                                                                </div>



                                                                                </h6>
                                                                        
                        

                                                                                    <div class="d-flex w-100 align-items-center"> 
                                                                                        <small><img src="{{$val_places_informations['icon_prefix'] . 'bg_88.png'}}" width="12px" > </small>
                                                                                        <span class="ms-2" style ="font-size: 12px;" > 
                                                                                            {{$val_places_informations['category_short_name']}} 
                                                                                        </span>
                                                                                    </div>


                                                                                     <div class="d-flex w-100 " style ="font-size: 12px;font-style: italic;" >
                                                                                        <small class="" ><i class="fas fa-check fa-lg"></i> <span class="ms-2">Ratings</span>      ({{$val_places_informations['ratings']}}%) : 
                                                                                        </small>
                                                                                        <span class="fa fa-star {{$val_places_informations['ratings'] >= 1   ?  'checked' : ''}}"></span>
                                                                                        <span class="fa fa-star {{$val_places_informations['ratings'] >= 20   ? 'checked' : ''}}"></span>
                                                                                        <span class="fa fa-star {{$val_places_informations['ratings'] >= 50   ? 'checked' : ''}}"></span>
                                                                                        <span class="fa fa-star {{$val_places_informations['ratings'] >= 70   ? 'checked' : ''}}"></span>
                                                                                        <span class="fa fa-star {{$val_places_informations['ratings'] >= 90   ? 'checked' : ''}}"></span>
                                                                                    </div>

                                                                    </div>
                                                            </div>
                                                    </div>
                                                </td>

                                                <td>  
                                                    <div class="col-sm-12 col-xl-12 ">
                                                        <div class="w-100 ms-4">
                                                            <iframe src = "https://maps.google.com/maps?q='{{ $val_places_informations['name'] }}'&hl=es;z=14&amp;output=embed" width="230px" height="140px"></iframe>
                                                        </div>
                                                    </div>
                                                </td>



                                            </tr>
                                        <?php endforeach ?>


                                    </tbody>

                                </table>

