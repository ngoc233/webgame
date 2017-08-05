<div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 hidden-sm hidden-xs">
                    <nav id="nav" class="navbar navbar-inverse navbar-fixed-top" style="background: rgba(76, 175, 80, 0.0);border: none;">
                      <div id="nav-brand" class="container-fluid">
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#"><img src="{{url('public/img/logo.png')}}"></a>
                        </div>
                        <ul id="nav-right" class="nav navbar-nav">
                          @foreach($arrays['menus'] as $menu)
                          <li><a href="{{$menu->link}}">{{$menu->name}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                    </nav>
                </div>
            </div>
        </div>