    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid bg-primary">
          <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
            <div class="logo"><a href="index.html"><img src="{{asset('images/logo.png')}}"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="{{Route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact us</a>
                </li>
              </ul>
              <div class="form-inline my-2 my-lg-0">
                <a href="{{route('login')}}"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Admin Login</button></a>
              </div>

            </div>
          </nav>
        </div>
      <!-- header section end -->
      <div class='separator'>

      </div>
