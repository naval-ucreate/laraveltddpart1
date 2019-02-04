<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="<?php echo route('display-empdata-page'); ?>">Display User</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @guest
      <li><a href="<?php echo route('display-register-page'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?php echo route('display-login-page'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @else
      <li><a href="<?php echo route('display-register-page'); ?>"><span class="glyphicon glyphicon-user">{{ Auth::user()->name }}</span> </a></li>
      <li><a href="<?php echo route('logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endguest;
    </ul>
  </div>
</nav>
