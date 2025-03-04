@extends('layouts.guest')


<!-- breadcrumb start-->
@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Gallery </h2>
                        <p>Home <span>//</span>Gallery</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- breadcrumb start-->

<!-- Gallery part start-->
<section>

    <div class="container mt-5">    
       
        <!-- Slider main container -->
<div class="swiper ayb-slider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach ($galleries as $gallery )          
      <div class="swiper-slide">
       <div class="main">
        <div class="ayb-slider-img">
            <img src="{{$gallery->image}}" alt="{{$gallery->name}} image">
        </div>
        <div class="ayb-slider-content">
            <h3 class="display-4">{{$gallery->name}}</h3>
            <p class="lead">{{ $gallery->short_note}}</p>
        </div>
       </div>
      </div>
      @endforeach
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    </div>

</section>

@endsection