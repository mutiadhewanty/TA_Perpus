<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/owl.css')}}">
    <!-- CSS -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/favicon.ico')}}">
    <link rel="icon" href="{{asset('admin/favicon.ico')}}" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <!-- Data table CSS -->
    <link href="{{asset('admin/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        @yield('nav')
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        @yield('banner')
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        @yield('content')
      </div>
    </div>

    <!-- <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- 
    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
    <footer>
      @yield('footer')
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('admin/assets/js/custom.js')}}"></script>
    <script src="{{asset('admin/assets/js/owl.js')}}"></script>
    <script src="{{asset('admin/assets/js/slick.js')}}"></script>
    <script src="{{asset('admin/assets/js/isotope.js')}}"></script>
    <script src="{{asset('admin/assets/js/accordions.js')}}"></script>

    <!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{asset('admin/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <!-- Data table JavaScript -->
    <script src="{{asset('admin/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
    
    <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/export-table-data.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>
    
    <!-- Owl JavaScript -->
    <script src="{{asset('admin/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
    <!-- Switchery JavaScript -->
    <script src="{{asset('admin/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    
    
    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{asset('admin/dist/js/init.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
