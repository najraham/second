@extends('frontend.layouts.layout')

@section('content')
    {{-- BANNER --}}
	<section id="home-section" class="hero">
		<h1 class="vr text-center">ANiSA</h1>
		<div class="js-fullheight home-wrap d-flex">
			<div class="half order-md-last"></div>
			<div class="half">
				<div class="home-slider owl-carousel">
                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                        <div class="container-fluid p-0">
                            <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                                <div class="one-third img js-fullheight" style="background-image:url('{{asset("frontend/images/bg_1.jpg")}}');">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                        <div class="container-fluid p-0">
                            <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                                <div class="one-third img js-fullheight" style="background-image:url('{{asset("frontend/images/bg_2.jpg")}}');">
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                        <div class="container-fluid p-0">
                            <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                                <div class="one-third img js-fullheight" style="background-image:url('{{asset("frontend/images/person_1.jpg")}}');">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item js-fullheight">
                        <div class="overlay"></div>
                            <div class="container-fluid p-0">
                                <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
                                    <div class="one-third img js-fullheight" style="background-image:url('{{asset("frontend/images/person_2.jpg")}}');">
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

    {{-- INDEX --}}
	<section class="ftco-section ftco-intro">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-8">
                    {{-- title --}}
                    <h2>{{$index->title}}</h2>
                    {{-- description --}}
					<p>{{$index->description}}</p>
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

    {{-- PROJECTS --}}
    @if (count($projects) > 0)
        <section class="ftco-section ftco-portfolio">
            <div class="container-fluid">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-12 mb-5 heading-section text-center ftco-animate">
                        <h2 class="mb-5">Projects {{--&amp; <span>Greatest</span>--}} </h2>
                    </div>
                </div>
            </div>

            @foreach ($projects as $project)
                @if (($project_count%2) == 0)
                    <div class="container-fluid px-0 portfolio-entry">
                        <div class="row no-gutters d-xl-flex justify-content-end text-wrapper">
                            {{-- image --}}
                            <div class="one-half img js-fullheight" style="background-image: url('{{asset('frontend/images/'.$project->image)}}');"></div>
                                <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
                                    <div class="text align-items-center d-flex">
                                        <div class="desc pt-5 pl-4 pr-4 pt-lg-0 pl-lg-5 pl-xl-0 pr-xl-0">
                                            <div class="top">
                                                {{-- created_at --}}
                                            <span class="subheading">{{$project->created_at}}</span>
                                            {{-- title --}}
                                            <h2 class="mb-4"><a href="work.html">{{$project->title}}</a></h2>
                                        </div>
                                        <div class="absolute">
                                            {{-- description --}}
                                            <p>{{$project->description}}</p>
                                            {{-- link --}}
                                            <p><a href="{{$project->link}}" class="custom-btn">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-md-12 portfolio-wrap">
                                <div class="row no-gutters align-items-center">
                                    {{-- image --}}
                                    <div class="col-md-5 img js-fullheight" style="background-image: url({{asset('frontend/images/'.$project->image)}});">

                                    </div>
                                    <div class="col-md-7">
                                        <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                                            <div class="px-4 px-lg-4">
                                                <div class="desc">
                                                    <div class="top">
                                                        {{-- created_at --}}
                                                        <span class="subheading">{{$project->created_at}}</span>
                                                        {{-- title --}}
                                                        <h2 class="mb-4"><a href="work.html">{{$project->title}}</a></h2>
                                                    </div>
                                                    <div class="absolute">
                                                        {{-- description --}}
                                                        <p>{{$project->description}}</p>
                                                        {{-- link --}}
                                                        <p><a href="{{$project->link}}" class="custom-btn">View Portfolio</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <?php $project_count = $project_count + 1 ?>
            @endforeach
        </section>
    @else
        <p>No projects yet</p>
    @endif
@endsection
