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
   <section class="category-wise-content pt-4">
      <div class="container">
         <div class="category-item">
               <h3 class="">Recent Videos </h3>
               <div class="row">
                  @foreach ($recent_videos as $video)
                     <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="video-box">
                              <iframe width="100%" height="280px" src="{{ $video->video_link }}" title="YouTube video player"
                                 frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                 allowfullscreen>
                              </iframe>
                        </div>
                     </div>
                  @endforeach
               </div>
         </div>
      </div>
   </section>
   <!-- VIDEO SECTION END -->
   <!-- VIDEO SECTION STARt -->
   <section class="category-wise-content py-4">
      <div class="container">
         @forelse ($categories as $item)
               @if (App\Models\Service::where('category_id', $item->id)->count() != 0)
                  <div class="category-item my-4">
                     <h3 class="">{{ $item->name }} </h3>
                     <div class="row">
                        @foreach ( App\Models\Service::where('category_id', $item->id)->inRandomOrder()->limit(3)->get(); as $video)
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                              <div class="video-box">
                                    <iframe width="100%" height="280px" src="{{ $video->video_link }}" title="YouTube video player"
                                       frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                       allowfullscreen>
                                    </iframe>
                              </div>
                           </div>
                        @endforeach
                     </div>
                  </div>
               @endif
            @empty
            <p>ক্যাটাগরির ভিডিও শীগ্রই আসবে...</p>
         @endforelse
      </div>
   </section>
   <!-- VIDEO SECTION END -->

   <!-- VIDEO CARD SECTION END -->
   <section class="video">
      <div class="container">
         <h3 class="mt-4">বিশেষ বক্তব্য এবং বিস্তারিত আলোচনা </h3>
         <div class="row">
            @foreach ($specials_lecture as $video)
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-4">
                  <div class="card">
                     <iframe width="100%" height="280px" src="{{ $video->video_link }}" title="YouTube video player"
                           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                     </iframe>
                     <div class="card-body">
                           <h4 class="card-title">{{ Str::limit($video->title, 25, $end='...') }}</h4>
                           <p class="card-text">{{ Str::limit($video->long_description, 220, $end='...') }} </p>
                           <a href="{{ route('video-details', $video->id) }}" class="btn btn-primary">View Details</a>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
      </div>
   </section>
   <!-- VIDEO CARD SECTION END -->
@endsection











