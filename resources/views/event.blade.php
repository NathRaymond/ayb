@extends('layouts.guest')


@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our Events</h2>
                        <p>Home <span>//</span>member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- service_part part start-->
<section>

   <x-alert />
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="cta_part_iner">
                    <div cta_part_text>
                        <h1 class="mb-5 text-center h3">Upcoming Events</h1>
                        @if(count($upcoming) == 0)
                        <p>We Organise Monthly, Quarterly And Annual Meetups,
                            Workshops, Trainings And Bootcamps</p>
                        @else
                        <div class="row row-cols-4">
                            @foreach($upcoming as $event)
                            <div class="col">
                                <div class="card mb-4" >
                                    <div>
                                    <img src="{{$event->image64}}" class="card-img-top" 
                                    alt="{{$event->name}}" style="height: 12rem;">
                                    </div>

                                    <div class="card-body text-center">
                                        <h3 class="text-center h3">{{$event->name}}</h3>
                                    
                                        <a href="/event-registration/{{$event->id}}/create" class="btn btn-success my-3 mt-5">Register</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mb-5 pb-5">
        @if(count($events) == 0)
        @else
        <h1 class="text-center h3">Past Events</h1>
        
        <div  class="row owl-carousel owl-theme">
            @foreach($events as $event)
            <div class="item">
                <div class="card mb-4">
                    <img src="{{$event->image64}}" class="card-img-top" alt="{{$event->name}}">
                    <div class="card-body">
                        <p>{{$event->name}}</p>
                        <p class="card-text">{{$event->short_note}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


@endsection

@push('scripts')
<script>
    $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    autoplay: true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});
</script>


@endpush