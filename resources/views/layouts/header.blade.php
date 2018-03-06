<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 10px;">
  <div class="container">    
    <a class="navbar-brand" href="/">HR Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="#">Salary Slip</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Report</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Management
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">                  
            <a class="dropdown-item" href="{{ route('employee.index') }}">Employee Management</a>
            <a class="dropdown-item" href="{{ route('division.index') }}">Division Management</a>
            <a class="dropdown-item" href="{{ route('grade.index') }}">Grade Management</a>
          </div>
        </li>   
      </ul>
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @if(Auth::check())
          {{Auth::user()->name}}
        @else
          Guest
        @endif
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">        
          @if(Auth::check())
            <a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          @else
            <a class="dropdown-item" href="{{route('login')}}">Login</a>
            <a class="dropdown-item" href="{{route('register')}}">Register</a>
          @endif          
        </div>
      </div>       
    </div>
  </div>
</nav>