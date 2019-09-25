@extends('frontend.layouts.layout')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h2 class="mb-3 bread">Contact Me</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('show_index_page')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section class="contact-section bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>{{$contact->address}}</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">{{$contact->phone}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">{{$contact->email}}</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="align-self-stretch box p-4 py-md-5 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">{{$contact->website}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MESSAGE --}}
    <div class="container justify-content-center"><h1 id="message"></h1></div>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container-fluid px-0">
            <div class="row no-gutters block-9 justify-content-center">
                <div class="col-md-6 order-md-last d-flex">
                    <form>
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" onclick="sendMessage()" value="Send Message" class="btn btn-info py-3 px-5">
                        </div>
                    </form>

                    <script>
                        function sendMessage() {
                            $.ajax({
                                type:'POST',
                                url:'/api/message',
                                data:{
                                    "_token": "{{ csrf_token() }}",
                                    "name": $('#name').val(),
                                    "email": $('#email').val(),
                                    "subject": $('#subject').val(),
                                    "message": $('textarea#message').val(),
                                },
                                success:function(data) {
                                    console.log(data);
                                    $('#message').text(data.success);
                                    $('#name').val('');
                                    $('#email').val('');
                                    $('#subject').val('');
                                    $('#message').text('');
                                }
                            });
                        }
                    </script>

                </div>

                {{-- <div class="col-md-6 d-flex">
                    <div id="map" class="bg-white"></div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
