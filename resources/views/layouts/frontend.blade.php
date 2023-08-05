<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="{{ asset('images/logo/site_logo.png')}}" type="image/x-icon">
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <title>East Star Plastic</title>
</head>

<body>
   <header class="header sticky-top">
      <section class="top_header">
         <div class="container">
            <div class="row g-3 align-items-center">
               <div class="col-lg-2 col-md-3 col-3">
                  <div class="d-flex align-items-center">
                     <img src="images/icon/callcalling_orange.svg" alt="header_icon" class="header_icon">
                     <a href="tel:09-799577777" class="text-decoration-none header_text">09-799577777</a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-9">
                  <div class="d-flex align-items-center">
                     <img src="images/icon/email_orange.svg" alt="header_icon" class="header_icon">
                     <a href="mailto:eaststarplasticcupfactory@gmail.com"
                        class="text-decoration-none header_text">E-mail: eaststarplasticcupfactory@gmail.com</a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-3 d-md-block d-none">
                  <div class="d-flex justify-content-md-end">
                     <a href="#" class="text-decoration-none">
                        <img src="images/icon/myanmar_.svg" alt="flag_iocn" class="flag_iocn">
                     </a>
                     <span class="border_right_hr"></span>
                     <a href="#" class="text-decoration-none">
                        <img src="images/icon/china_.svg" alt="flag_iocn" class="flag_iocn">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bottom_header">
         <nav class="navbar navbar-expand-lg py-0">
            <div class="container">
               <div class="d-flex justify-content-between align-items-center w_view">
                  <a class="navbar-brand" href="{{ url('/')}}">
                     <img src="images/logo/logo.png" alt="logo" class="brand_img">
                  </a>
                  <div class="d-flex justify-content-md-end d-lg-none d-md-none pe-4">
                     <a href="#" class="text-decoration-none">
                        <img src="images/icon/myanmar_.svg" alt="flag_iocn" class="flag_iocn">
                     </a>
                     <span class="border_right_hr"></span>
                     <a href="#" class="text-decoration-none">
                        <img src="images/icon/china_.svg" alt="flag_iocn" class="flag_iocn">
                     </a>
                  </div>
                  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
               </div>
               <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav ms-auto">
                    @foreach ($data[0] as $navitem)
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is($navitem->route)) ? 'active' : '' }}" href="{{ route($navitem->route) }}">{{ $navitem->name }}</a>
                        </li>
                    @endforeach
                     {{-- <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about-us.html">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="product.html">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="news.html">News</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contacts</a>
                     </li> --}}
                  </ul>
               </div>
            </div>
         </nav>
      </section>
   </header>
   <main class="content fade_effect">
    @yield('content')
   </main>
   <footer class="footer">
      <section class="top_footer">
         <div class="bg_layer pb-lg-5 py-lg-4 py-3">
            <div class="container py-lg-5 py-4">
               <div class="row gy-4">
                  <div class="col-lg-4 col-md-6">
                     <img src="images/logo/logo.png" alt="logo" class="footer_logo">
                     <div class="d-lg-none d-md-block d-none mt-4">
                        <h5 class="footer_header">
                           Site Map
                        </h5>
                        <ul class="footer_nav">
                           <li>
                              <a href="about-us.html" class="footer_nav_link">About Us</a>
                           </li>
                           <li>
                              <a href="product.html" class="footer_nav_link">Products</a>
                           </li>
                           <li>
                              <a href="news.html" class="footer_nav_link">News</a>
                           </li>
                           <li>
                              <a href="contact.html" class="footer_nav_link">Contacts</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-6">
                     <h5 class="footer_header ps-lg-4">
                        Address
                     </h5>
                     <div class="d-flex">
                        <div>
                           <img src="images/icon/location_orange.svg" alt="icon" class="footer_icon">
                        </div>

                        <span class="footer_text">
                            Add : {{ $data[3]->address}}
                           {{-- Add : No.143/61-64 Mya Wa Di Min Gyi Street, <br class="d-lg-block d-none"> Ywar Thar Gyi Industrial Zone, South Dagon
                           Township, <br class="d-lg-block d-none"> Yangon, Myanmar --}}
                        </span>
                     </div>
                     <div class="d-flex my-2">
                        <div>
                           <img src="images/icon/callcalling_orange.svg" alt="icon" class="footer_icon">
                        </div>
                        <span class="footer_text">
                            Tel : {{ $data[3]->address}}
                           {{-- Tel : 09-420716344, 09-799577777, 09-456763777 --}}
                     </div>
                     <div class="d-flex">
                        <div>
                           <img src="images/icon/email_orange.svg" alt="icon" class="footer_icon">
                        </div>
                        <span class="footer_text">
                            E-mail : {{ $data[3]->email}}
                           {{-- E-mail : eaststarplasticcupfactory@gmail.com --}}
                        </span>
                     </div>
                  </div>
                  <div class="col-md-3 d-lg-block d-md-none d-block">
                     <h5 class="footer_header">
                        Site Map
                     </h5>
                     <ul class="footer_nav">
                        <li>
                           <a href="about-us.html" class="footer_nav_link">About Us</a>
                        </li>
                        <li>
                           <a href="product.html" class="footer_nav_link">Products</a>
                        </li>
                        <li>
                           <a href="news.html" class="footer_nav_link">News</a>
                        </li>
                        <li>
                           <a href="contact.html" class="footer_nav_link">Contacts</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="bottom_footer text-center">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <p class="dev_text">
                     Copyright©2018 : East Star Plastic cup FactoryPowered by : www.300.cn 粤ICP备2022105790号
                  </p>
               </div>
            </div>
         </div>
      </section>
   </footer>

   <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
   <script src="{{ asset('js/jquery.min.js') }} "></script>
   <script src="{{ asset('js/owl.carousel.min.js') }} "></script>
   <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
