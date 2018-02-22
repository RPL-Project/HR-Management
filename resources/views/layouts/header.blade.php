<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">HR Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="#">Salary Slip</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Report</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Management</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">        
          @if(Auth::check())
            <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
            <a class="dropdown-item" href="#">Edit Profile</a>
            <a class="dropdown-item" href="{{ route('auth.logout') }}" title="Logout">Logout</a>
          @else
            <a class="dropdown-item" href="{{route('login')}}">Login</a>
            <a class="dropdown-item" href="{{route('register')}}">Register</a>
          @endif          
        </div>
      </li>   
    </ul>  
  </div>
</nav>