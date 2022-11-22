<!DOCTYPE html>
<html>

<head>
    <title>Article App</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">ARTICLE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">Login</a>
              </li>
          
             
            </ul>
          </div>
        </div>
      </nav>
    <!-- dynamic content -->
    @yield('content')


    
</body>

</html>