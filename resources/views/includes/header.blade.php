<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="@yield('home')"><a href="#">Home</a></li>
      <li class="@yield('team')" ><a href="<?php echo route('team.index'); ?>" >Team</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if(!Auth::check())
      <li><a href="<?php echo route('display-register-page'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo route('display-login-page'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       @else
       <li><a href="<?php echo route('logout'); ?>"><span class="glyphicon glyphicon-log-in"></span>{{ Auth::user()->name }}</a></li>
      <li><a href="<?php echo route('logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endif
    </ul>
  </div>
</nav>
