@extends('frontend.layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">Beautiful Work</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('show_index_page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-1.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Web Design {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Midway</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-2.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Writing {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Workplace Office</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-3.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Illustration {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Jacket Leather</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-4.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Application {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Topless</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-5.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Writing {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Fashion Style</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 portfolio-wrap ftco-animate">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="img js-fullheight" style="background-image: url({{asset('frontend/images/work-6.jpg')}});">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text">
                                <div class="px-0 pt-5">
                                    <div class="desc">
                                        <div class="top top-relative">
                                            <span class="subheading">Illustration {12/06/2019}</span>
                                            <h2 class="mb-4"><a href="{{route('show_single_work_page')}}">Prickly</a></h2>
                                        </div>
                                        <div class="absolute relative">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                            <p><a href="{{route('show_single_work_page')}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
