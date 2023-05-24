<header class="sticky-top">      
    <div class="offcanvas offcanvas-top h-100" id="contactForm" data-bs-backdrop="false" tabindex="-1">
        <div class="offcanvas-body container mt-5">
            <h2>Contactame!</h2>
            <form class="row g-2 needs-validation" novalidate>
                <div class="col-xs-12 col-4">
                    <select class="form-select">
                        <option selected value="">Consulta</option>
                        <option value="">Oferta</option>
                        <option value="">Duda</option>
                        <option value="">Otros</option>
                    </select>
                </div>
                <div class="col-xs-12 col-8">
                    <input type="text" class="form-control" placeholder="Nombre" required>                                 
                </div>
                <div class="col-12">
                    <input type="email" class="form-control" placeholder="Correo electrónico" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" rows="6" placeholder="Mensaje" required></textarea>
                </div>                         
                <button type="submit" class="btn btn-custom rounded-pill rounded-pill">Contactar</button>
            </form>
        </div>
        <div class="offcanvas-footer">
            @include('layouts.partials.footer')
        </div>
    </div>

    <nav id="menu" class="navbar navbar-expand-md navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand btn collapsed btn-custom rounded-pill" href="{{route('home')}}">
                <img src="{{ asset('img/logo-negro.svg') }}" alt="Logo" width="24" height="24" class="d-inline-block align-text-top" id="logo">
            </a>

            <div class="d-none d-md-block">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="btn btn-custom rounded-pill {{request()->routeIs('home') ? '' : 'collapsed'}}" href="{{route('home')}}">
                            Información personal
                        </a>
                    </li>
                    <li class="nav-item">  
                        <a class="btn btn-custom rounded-pill {{request()->routeIs('projects.index') ? '' : 'collapsed'}}" href="{{route('projects.index')}}">
                            Proyectos
                        </a>
                    </li>
                </ul>
            </div>
            
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <button class="btn-custom collapsed btn rounded-pill" type="button" data-bs-toggle="offcanvas" data-bs-target="#contactForm" id="contact-btn">
                        Contacto
                    </button>
                </li>
                <li class="nav-item">
                    <button class="toggler collapsed btn rounded-pill d-block d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" id="toggle-btn" style="height: 38px !important;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- offcanvas (menu extensible del modo movil) -->   
    <div class="collapse" id="mobileMenu">
        <div class="border-bottom">
            <div class="row justify-between m-2">
                <div class="col">
                    <a class="btn btn-custom rounded-pill w-100 {{request()->routeIs('home') ? '' : 'collapsed'}}" href="{{route('home')}}">
                        Información personal
                    </a>
                </div>
                <div class="col">
                    <a class="btn btn-custom rounded-pill w-100 {{request()->routeIs('projects.index') ? '' : 'collapsed'}}" href="{{route('projects.index')}}">
                        Proyectos
                    </a>
                </div>
            </div>
        </div>
    </div>   
</header>