<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('show_index_page')}}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('show_about_page')}}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{route('show_work_page')}}" class="nav-link">Work</a></li>
            <li class="nav-item"><a href="{{route('show_contact_page')}}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
