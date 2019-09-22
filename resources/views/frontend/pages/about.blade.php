@extends('frontend.layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">About Me</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('show_index_page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    {{-- INDEX --}}
    <section class="ftco-section ftco-intro">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-4 d-flex">
                    <div class="home-slider owl-carousel">
                        @foreach ($index->banner_image as $banner_image)
                            <div class="slider-item js-fullheight">
                                <div class="overlay"></div>
                                <div class="container-fluid p-0">
                                    <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                                        <div class="one-third img js-fullheight" style="background-image:url('{{asset("storage/backend/images/".$banner_image)}}');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="img" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}')"></div> --}}
                </div>
                <div class="col-md-8 py-md-5 pt-4 p-md-5">
                    {{-- title --}}
                    <h2>{{$index->title}}</h2>
                    {{-- description --}}
                    <p>{{$index->description}}</p>

                    <p><a href="{{route('show_contact_page')}}" class="btn btn-primary">Contact Me</a></p>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    @if (count($services) > 0)
        <section class="services-section py-5 py-md-0">
            <div class="container">
                <div class="row no-gutters d-flex">
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services @if(($service_count%2) == 0) active @endif d-block">
                                <div class="icon"><span class="{{$service->icon}}"></span></div>
                                <div class="media-body">
                                    {{-- title --}}
                                    <h3 class="heading mb-3">{{$service->title}}</h3>
                                    {{-- description --}}
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                        </div>
                        <?php $service_count = $service_count + 1 ?>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- TESTIMONY --}}
    @if (count($testimonies) > 0)
        <section class="testimony-section">
            <div class="container">
                <div class="row ftco-animate justify-content-center">
                    <div class="col-md-5 d-flex">
                        <div class="testimony-img" style="background-image: url({{asset('frontend/images/bg_2.jpg')}});"></div>
                    </div>
                    <div class="col-md-7 py-5 pl-md-5">
                        <div class="heading-section heading-section-white pt-4 ftco-animate">
                            <h2 class="mb-0">Customer Says</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            @foreach ($testimonies as $testimony)
                                <div class="item">
                                    <div class="testimony-wrap pb-4">
                                        <div class="text">
                                            {{-- saying --}}
                                            <p class="mb-4">{{$testimony->saying}}</p>
                                        </div>
                                        <div class="d-flex">
                                            {{-- user image --}}
                                            <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                                            </div>
                                            <div class="pos ml-3">
                                                {{-- user name --}}
                                                <p class="name">Jeff Nucci</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- PROJECTS --}}
    <section class="ftco-section ftco-intro bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="mb-0 font-primary">I've done work of <span class="number" data-number="{{count($projects)}}">0</span> Portfolio</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
