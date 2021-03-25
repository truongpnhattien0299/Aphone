<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- index-331:38-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    <title>
        Aphone
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="upload/image/x-icon" href="upload/images/favicon.png" />
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="upload/css/material-design-iconic-font.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="upload/css/font-awesome.min.css" />
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="upload/css/fontawesome-stars.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="upload/css/meanmenu.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="upload/css/owl.carousel.min.css" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="upload/css/slick.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="upload/css/animate.css" />
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="upload/css/jquery-ui.min.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="upload/css/venobox.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="upload/css/nice-select.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="upload/css/magnific-popup.css" />
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="upload/css/bootstrap.min.css" />
    <!-- Helper CSS -->
    <link rel="stylesheet" href="upload/css/helper.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="upload/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="upload/css/responsive.css" />
    <!-- Modernizr js -->
    <script src="upload/js/vendor/modernizr-2.8.3.min.js"></script>
    <script
        src="https://www.paypal.com/sdk/js?client-id=ASomrpjI4I0wCBPxoJXA_OJSs3UNre6XiL7q7lEaFSarbrQ69CT6C-PCClGRqmUkevQm3RjGw3x3ZL6s&disable-funding=card&buyer-country=VN">
        // Required. Replace SB_CLIENT_ID with your sandbox client ID.
    </script>
</head>

<body>
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">

        @include('Pages.layout.header.header')

        @yield('content')

        @include('Pages.layout.footer.footer')

    </div>
    <div class="modal fade modal-wrapper" id="exampleModalCenter"></div>
    <div id="snackbar">Some text some message..</div>
    <!-- Body Wrapper End Here -->
    <!-- jQuery-V1.12.4 -->
    <script src="upload/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper js -->
    <script src="upload/js/vendor/popper.min.js"></script>
    <!-- Bootstrap V4.1.3 Fremwork js -->
    <script src="upload/js/bootstrap.min.js"></script>
    <!-- Ajax Mail js -->
    <script src="upload/js/ajax-mail.js"></script>
    <!-- Meanmenu js -->
    <script src="upload/js/jquery.meanmenu.min.js"></script>
    <!-- Wow.min js -->
    <script src="upload/js/wow.min.js"></script>
    <!-- Slick Carousel js -->
    <script src="upload/js/slick.min.js"></script>
    <!-- Owl Carousel-2 js -->
    <script src="upload/js/owl.carousel.min.js"></script>
    <!-- Magnific popup js -->
    <script src="upload/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope js -->
    <script src="upload/js/isotope.pkgd.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="upload/js/imagesloaded.pkgd.min.js"></script>
    <!-- Mixitup js -->
    <script src="upload/js/jquery.mixitup.min.js"></script>
    <!-- Countdown -->
    <script src="upload/js/jquery.countdown.min.js"></script>
    <!-- Counterup -->
    <script src="upload/js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script src="upload/js/waypoints.min.js"></script>
    <!-- Barrating -->
    <script src="upload/js/jquery.barrating.min.js"></script>
    <!-- Jquery-ui -->
    <script src="upload/js/jquery-ui.min.js"></script>
    <!-- Venobox -->
    <script src="upload/js/venobox.min.js"></script>
    <!-- Nice Select js -->
    <script src="upload/js/jquery.nice-select.min.js"></script>
    <!-- ScrollUp js -->
    <script src="upload/js/scrollUp.min.js"></script>
    <!-- Main/Activator js -->
    <script src="upload/js/main.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
         
        function showSnackbar(message){
            let snackbar = document.getElementById("snackbar");
            snackbar.innerHTML = message;
            snackbar.className = "show";            
            setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
        }
    </script>
    <script src="index.js"></script>
    @yield('script')
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v7.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="105623911192114" theme_color="#0084ff"
        logged_in_greeting="Chào mừng bạn đến Aphone, tôi có thể giúp gì cho bạn ?"
        logged_out_greeting="Chào mừng bạn đến Aphone, tôi có thể giúp gì cho bạn ?">
    </div>
</body>

<!-- index-331:41-->

</html>