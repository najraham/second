<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Me</h2>
                    {{-- index->desc --}}
                    <p>{{$index->description}}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://www.linkedin.com/in/anisha-maharjan-128a85155/"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/najraham.ahsina"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/najraham.ahsina/"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://github.com/najraham"><span class="icon-github"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy</a></li>
                        <li><a href="#" class="py-2 d-block">Terms Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('show_index_page')}}" class="py-2 d-block">Home</a></li>
                        <li><a href="{{route('show_about_page')}}" class="py-2 d-block">About</a></li>
                        <li><a href="{{route('show_work_page')}}" class="py-2 d-block">Work</a></li>
                        <li><a href="{{route('show_contact_page')}}" class="py-2 d-block">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            {{-- contact->address --}}
                            <li><span class="icon icon-map-marker"></span><span class="text">{{$contact->address}}</span></li>
                            {{-- contact->phone --}}
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{$contact->phone}}</span></a></li>
                            {{-- contact->email --}}
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{$contact->email}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved | This site is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="{{route('show_index_page')}}" target="_blank">Anisha</a>
                    </p>
                </div>
            </div>
        </div>
</footer>
