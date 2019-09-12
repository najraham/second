@extends('frontend.layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">About Us</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('show_index_page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-4 d-flex">
                    <div class="img" style="background-image: url('{{asset('frontend/images/bg_2.jpg')}}')"></div>
                </div>
                <div class="col-md-8 py-md-5 pt-4 p-md-5">
                    <h2>Web <span>Designer</span>, hobbyist writer, and the CEO &amp; Founder of <span>Evans</span></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="{{route('show_contact_page')}}" class="btn btn-primary">Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section py-5 py-md-0">
        <div class="container">
            <div class="row no-gutters d-flex">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                <div class="icon"><span class="flaticon-layers"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Web Design</h3>
                    <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services active d-block">
                <div class="icon"><span class="flaticon-web-programming"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Web Development</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-block">
                <div class="icon"><span class="flaticon-idea"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Graphic Design</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services active-2 d-block">
                <div class="icon"><span class="flaticon-contract"></span></div>
                <div class="media-body">
                    <h3 class="heading mb-3">Writing</h3>
                    <p>A small river named Duden flows by their place and supplies.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

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
                <div class="item">
                    <div class="testimony-wrap pb-4">
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jeff Nucci</p>
                            <span class="position">Businessman</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap pb-4">
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jeff Nucci</p>
                            <span class="position">Businessman</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap pb-4">
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jeff Nucci</p>
                            <span class="position">Businessman</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap pb-4">
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jeff Nucci</p>
                            <span class="position">Businessman</span>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimony-wrap pb-4">
                    <div class="text">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <div class="d-flex">
                        <div class="user-img" style="background-image: url({{asset('frontend/images/person_1.jpg')}})">
                        </div>
                        <div class="pos ml-3">
                            <p class="name">Jeff Nucci</p>
                            <span class="position">Businessman</span>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-intro bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="mb-0 font-primary">We've done work of <span class="number" data-number="300">0</span> Portfolio</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
