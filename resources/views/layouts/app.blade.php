<!DOCTYPE html>
<html lang="en">
<!-- <html lang="ar" dir="rtl"> -->

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title') | BorerAlo</title>
      <!--    GOOGLE FONT-->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
      <!--    BOOSTRAP-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <!--    FONT AWSOME-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <!--    SLICK SLIDER-->
      <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
      <!--    MAIN CSS-->
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
      <!-- <link rel="stylesheet" href="css/arabic.css"> -->
   </head>


   <body>
      <!--    HEADER SECTION-->
      <header class="d-flex align-items-center">
         <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-md-4">
                     <div class="logo d-flex justify-content-between align-items-center">
                           <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                           </a>
                           <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="col-md-8 d-none d-md-block">
                     <div class="menubar">
                           <ul>
                              <li><a href="{{ route('index') }}">Home</a></li>
                              @if (Auth::guest())
                                 <li><a class="login-menu" href="{{ route('login') }}">Login</a></li>
                                 @else
                                    @if (Auth::user()->role == 1)
                                       <li><a class="login-menu" href="{{ route('admin.index') }}">Admin Dashboard</a></li>
                                    @elseif(Auth::user()->role == 2)
                                       <li><a class="login-menu" href="{{ route('admin.index') }}">Admin Dashboard</a></li>
                                    @endif
                              @endif
                           </ul>
                     </div>
                  </div>
               </div>
         </div>
      </header>
      <!--    HEADER SECTION END-->

      <!-- MOBILE MENU-->
      <div id="mobile-menu" class="mobile-menu">
         <!-- accordion-->
         <div class="accordion accordion-flush" id="accordionFlushExample">

               <div class="mobile-logo mb-5">
                  <a href="index.html">
                     <img src="assets/img/logo/logo.png" alt="mobile-logo">
                  </a>
                  <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
               </div>

               <div class="accordion-item custom ">
                  <h2 class="accordion-header" id="flush-headingThree">
                     @if (Auth::guest())
                        <a href="{{ route('login') }}">
                           <button class="accordion-button custom collapsed none" type="button">
                              Login
                           </button>
                        </a>
                        @else
                           @if (Auth::user()->role == 1)
                              <a href="{{ route('admin.index') }}">
                                 <button class="accordion-button custom collapsed none" type="button">
                                    Admin Dashboard
                                 </button>
                              </a>
                           @elseif(Auth::user()->role == 2)
                              <a href="{{ route('admin.index') }}">
                                 <button class="accordion-button custom collapsed none" type="button">
                                    Admin Dashboard
                                 </button>
                              </a>
                           @endif
                     @endif
                  </h2>
               </div>
               <div class="accordion-item custom ">
                  <h2 class="accordion-header" id="flush-headingThree">
                     <a href="{{ route('index') }}">
                           <button class="accordion-button custom collapsed none" type="button">
                              Home
                           </button>
                     </a>
                  </h2>
               </div>
         </div>

      </div>
      <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>

         @yield('content')
         
         <!--    FOOTER SECTION-->
      <footer class="footer-part">
         <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="left text-center">
                           <img class="logo" src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-4">
                     <div class="social-link d-flex justify-content-center">
                           <li class="mx-2">
                              <a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                           </li>
                           <li class="mx-2">
                              <a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                           </li>
                           <li class="mx-2">
                              <a target="_blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                           </li>
                     </div>
                  </div>
               </div>
         </div>
      </footer>
      <!--    FOOTER SECTION END-->
      <!-- COPYRIGHT START -->
      <section class="copyright-part py-4">
         <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pt-4 text-center">
                     <p>COPYRIGHT © 2022 ভোরের এর আলো</p>
                  </div>
               </div>
         </div>
      </section>
      <!-- COPYRIGHT END -->
      <!--    JQUERY-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!--    SLICK SLIDER-->
      <script src="{{ asset('assets/js/slick.min.js') }}"></script>
      <!--    BOOSTRAP-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
   </body>
</html>