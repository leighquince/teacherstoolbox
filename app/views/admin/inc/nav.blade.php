<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <!-- Menu button for smallar screens -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span>Menu</span>
      </a>
      <!-- Site name for smallar screens -->
      <a href="{{ URL::asset('/') }}" class="brand hidden-desktop">TeachersToolBox</a>

      <!-- Navigation starts -->
      <div class="nav-collapse collapse">        

        

        <!-- Search form -->
        <form class="navbar-search pull-left">
          <input type="text" class="search-query" placeholder="Search">
        </form>

        <!-- Links -->
        <ul class="nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="icon-user"></i> {{ Auth::user()->email}} <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="{{ URL::asset('profile') }}"<i class="icon-user"></i> Profile</a></li>
              <li><a href="{{ URL::asset('settings') }}"><i class="icon-cogs"></i> Settings</a></li>
              <li><a href="{{URL::to('logout')}}"><i class="icon-off"></i>logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>

    </div>
  </div>
</div>