<div id="side-right" class="col-md-8 col-sm-8 col-lg-8 col-xs-8" >
                        <div class="row" >
                        <div class="col-md-12 col-lg-12 hidden-xs hidden-sm">
                          <div   id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->

                            <ol class="carousel-indicators">
                              @for($i=0;$i<count($arrays['sliders']);$i++)
                                @if($i==0)
                                  <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
                                @else
                                 <li data-target="#myCarousel" data-slide-to="{{$i}}" class=""></li>
                                @endif
                              @endfor
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              @foreach($arrays['sliders'] as $slider)
                              @if($slider->id == $arrays['newSlider']->id)
                              <div class="item active">
                                <img id="img-slider" src="{{url('public/img/'.$slider->image)}}"  style="width:100%;">
                                <div class="carousel-caption">
                                </div>
                              </div>
                              @else
                              <div class="item">
                                <img id="img-slider" src="{{url('public/img/'.$slider->image)}}"  style="width:100%;">
                                <div class="carousel-caption">  
                                </div>
                              </div>
                              @endif
                              @endforeach
                        </div>
                        </div>
                        </div>
                    </div>