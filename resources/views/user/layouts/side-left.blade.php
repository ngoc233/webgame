<div id="side-left" class="col-md-4 col-lg-4 hidden-xs hidden-sm ">
                        <!-- singup-->
                        <div id="singup">
                            <!-- Trigger the modal with a button -->
                            <div class="row">
                                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">    
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                        <div id="block-playnow">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                <!--modal-form-->
                                    <form action="#" class="form-group" id="form-modal">
                                        <h1>Signup Now</h1>
                                        <br>
                                        <input class="form-control" type="text" name="name" placeholder="name">
                                        <br>
                                        <input class="form-control" type="password" name="password" placeholder="password">
                                        <br>
                                        <input class="form-control" type="password" name="repassword" placeholder="repassword">
                                        <br>
                                        <input class="form-control" type="email" name="email" placeholder="email">
                                        <br>
                                        <button type="submit" class="btn btn-default">Signup</button>
                                        <a href="{{ URL::to('facebook') }}">Facebook Login</a>

                                    </form>
                                <!--/modal-form-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        <!--/singup-->
                        <!-- server-->
                        <div class="row">
                            <div id="server" class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                                <h5>Danh sách máy chủ</h5>
                                <div id="new-server">
                                    <h3>
                                        <a href="">Chân Long - S{{$arrays['newServer']->name}}</a>
                                    </h3>
                                    @foreach($arrays['servers'] as $sever)
                                    <ul id="old-server">
                                        <li>S{{$sever->name}}</li>
                                    </ul>
                                    @endforeach
                                    {{ $arrays['servers']->links() }}
                                </div>
                            </div>
                        </div>
                        <!--/server-->
                        <!--function-->
                        <div class="row">
                            <div class="col-lg-12 hidden-xs hidden-sm col-md-12">
                                <div id="button-big">
                                    <ul>
                                        <a href="#">
                                            <li class="function" id="recharge"></li>
                                        </a>
                                        <a href="#">
                                            <li class="function" id="gifcode"></li>
                                        </a>
                                        <a href="#">
                                            <li class="function" id="tutorial"></li>
                                        </a>
                                    </ul>
                                </div>
                            </div>  
                        </div>  
                        <!--/function-->
                        <!-- facebook-->
                        <div  style="margin-left: -16px;" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                            <div class="fb-page" data-href="https://www.facebook.com/thongtinlienminhhuyenthoai/" data-tabs="timeline" data-width="320px" data-height="530px;" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thongtinlienminhhuyenthoai/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thongtinlienminhhuyenthoai/">Facebook</a></blockquote>
                            </div>
                        </div>
                        <!--/facebook-->
                    </div>