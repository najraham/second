@extends('frontend.layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">Beautiful Work</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('show_index_page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Work <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    @if (count($projects) > 0)
        <section class="ftco-section ftco-portfolio">
            <div class="container">
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-md-6 portfolio-wrap ftco-animate">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    {{-- image --}}
                                    <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/'.$project->image)}});">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text">
                                        <div class="px-0 pt-5">
                                            <div class="desc">
                                                <div class="top top-relative">
                                                    {{-- created at --}}
                                                    <span class="subheading">{{$project->created_at->format('Y/M/d')}}</span>
                                                    {{-- title --}}
                                                    <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">{{$project->title}}</a></h2>
                                                </div>
                                                <div class="absolute relative">
                                                    {{-- description --}}
                                                    <p>{{$project->description}}</p>
                                                    <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View in detail</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
    @else
        <p>No projects yet</p>
    @endif
@endsection
