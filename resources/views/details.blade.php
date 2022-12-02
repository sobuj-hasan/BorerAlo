@extends('layouts.app')
@section('title', 'Details')
@section('content')
  <!-- VIDEO SECTION STARt -->
  <section>
      <div class="container">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="video-part mt-4">
                      <iframe width="100%" height="300" src="{{ $video_details->video_link }}" title="YouTube video player"
                          frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
                  </div>
                  <div class="description-part">
                      <h4 class="py-4">{{ $video_details->title }}</h4>
                      <p class="pb-5">
                        {{ $video_details->long_description }}
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- VIDEO SECTION END -->
@endsection


