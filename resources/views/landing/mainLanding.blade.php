

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="{{asset('landingpage/vendors/mdi/css/materialdesignicons.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('landingpage/vendors/aos/dist/aos.css/aos.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('landingpage/vendors/owl.carousel/dist/assets/owl.carousel.min.css')}}" />
    
    <link
      rel="stylesheet"
      href="{{asset('landingpage/vendors/owl.carousel/dist/assets/owl.theme.default.min.css')}}" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{asset('landingpage/images/favicon.png')}}" />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('landingpage/css/style.css')}}" />
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li>Wed, March 4, 2020</li>
                  <li>30°C,London</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="{{ url('landing' )}}"><h1 style="font-weight: bold;
                    font-size: xx-large;">WEBSITE BERITA DPR RI</h1></a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">BAHASA</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="{{ url('landing' )}}">Home</a>
                    </li>
                    @foreach ($category as $item)
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('getIdCat/' .$item->id )}}">{{ $item->category }}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                      <a class="nav-link">Kategori Berita</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>      


         
        @yield('content')
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container">            
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <div>
                    <a class="text-dark" href="{{ url('landing' )}}"><h1 style="font-weight: bold;
                      font-size: xx-large;">WEBSITE BERITA DPR RI</h1></a>
                  </div>

                  <div class="d-flex justify-content-end footer-social">
                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                    <ul class="social-media">
                      <li>
                        <a href="#">
                          <i class="mdi mdi-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-linkedin"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-twitter"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <ul class="footer-horizontal-menu">
                    <li><a href="#">Terms of Use.</a></li>
                    <li><a href="#">Privacy Policy.</a></li>
                    <li><a href="#">Accessibility & CC.</a></li>
                    <li><a href="#">AdChoices.</a></li>
                    <li><a href="#">Advertise with us Transcripts.</a></li>
                    <li><a href="#">License.</a></li>
                    <li><a href="#">Sitemap</a></li>
                  </ul>
                  <p class="font-weight-medium">
                    © 2020 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-dark">@ BootstrapDash</a>, Inc.All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="{{asset('landingpage/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('landingpage/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('landingpage/js/demo.js')}}" ></script>
    <!-- End custom js for this page-->
  </body>
</html>

<script>
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
  }
  </script>