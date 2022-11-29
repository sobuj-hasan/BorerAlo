@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
   <!-- BANNER SECTION START -->
   <section class="banner">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
         <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                  aria-label="Slide 4"></button>
         </div>
         <div class="carousel-inner">
               <div class="carousel-item active">
                  <img src="assets/img/photos/bg-image.jpg" class="d-block w-100" alt="..."
                     style="height: 280px;">
                  <div class="container carousel-caption">
                     <div class="banner-content">
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="assets/img/photos/bg-image-2.jpg" class="d-block w-100" alt="..."
                     style="height: 280px;">
                  <div class="container carousel-caption">
                     <div class="banner-content">
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="assets/img/photos/bg-image-3.jpg" class="d-block w-100" alt="..."
                     style="height: 280px;">
                  <div class="container carousel-caption">
                     <div class="banner-content">
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="assets/img/photos/bg-image-2.jpg" class="d-block w-100" alt="..."
                     style="height: 280px;">
                  <div class="container carousel-caption">
                     <div class="banner-content">
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- BANNER SECTION END -->

   <!-- VIDEO SECTION STARt -->
   <section class="category-wise-content pt-4">
      <div class="container">
         <div class="category-item">
               <h4 class="" style="line-height: 28px; color: rgb(63, 63, 198);">
                  এ মর্মে আল্লাহ্ তা’আলার বাণীঃ কসম যুগের (সময়ের), নিশ্চয় মানুষ ক্ষতির মধ্যে আছে; কিন্তু তারা নয়, যারা বিশ্বাস স্থাপন করে ও সৎকর্ম করে এবং পরস্পরকে সত্যের উপদেশ দেয় এবং উপদেশ দেয় সবরের । ( - সূরা আছর)
               </h4>
         </div>
      </div>
   </section>
   <!-- VIDEO SECTION END -->

   <!-- VIDEO SECTION STARt -->
   <section class="category-wise-content py-4">
      <div class="container">
         <div class="category-item">
               <h3 class="">সাপ্তাহিক জুমআর খুৎবা </h3>
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                     <div class="video-box">
                           <iframe width="100%" height="280px" src="https://www.youtube.com/embed/_ixmVeB2nRw" title="YouTube video player"
                              frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                     <div class="video-box">
                           <iframe width="100%" height="280px" src="https://www.youtube.com/embed/P7MFPOtv2ck" title="YouTube video player"
                              frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                     <div class="video-box">
                           <iframe width="100%" height="280px" src="https://www.youtube.com/embed/Vl7SUkAi9rE" title="YouTube video player"
                              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- VIDEO SECTION END -->

   <!-- VIDEO CARD SECTION END -->
   <section class="video">
      <div class="container">
         <h3 class="mt-4">সালাফী মানহাজ পরিচিতি</h3>
         <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                  <div class="card">
                     <iframe width="100%" height="280px" src="https://www.youtube.com/embed/O2dkgafNZQg" title="YouTube video player"
                           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                     </iframe>
                     <div class="card-body">
                           <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                           <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio a quaerat aut. Officia aliquam perferendis exercitationem accusantium iste cum perspiciatis molestiae dolorum, velit dicta expedita. Porro vitae pariatur id! Odio?</p>
                           <a href="{{ route('details') }}" class="btn btn-primary">View Details</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                  <div class="card">
                     <iframe width="100%" height="280px" src="https://www.youtube.com/embed/O2dkgafNZQg" title="YouTube video player"
                           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                     </iframe>
                     <div class="card-body">
                           <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                           <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio a quaerat aut. Officia aliquam perferendis exercitationem accusantium iste cum perspiciatis molestiae dolorum, velit dicta expedita. Porro vitae pariatur id! Odio?</p>
                           <a href="{{ route('details') }}" class="btn btn-primary">View Details</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                  <div class="card">
                     <iframe width="100%" height="280px" src="https://www.youtube.com/embed/O2dkgafNZQg" title="YouTube video player"
                           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                     </iframe>
                     <div class="card-body">
                           <h4 class="card-title">Lorem ipsum dolor sit amet</h4>
                           <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio a quaerat aut. Officia aliquam perferendis exercitationem accusantium iste cum perspiciatis molestiae dolorum, velit dicta expedita. Porro vitae pariatur id! Odio?</p>
                           <a href="{{ route('details') }}" class="btn btn-primary">View Details</a>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- VIDEO CARD SECTION END -->
@endsection











