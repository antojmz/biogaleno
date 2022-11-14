<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-12">
                        <div class="social_media_links">
                            <a href="https://www.instagram.com/labgalenotinaquillo/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8 col-sm-12">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> contacto@biogaleno.com</a></li>
                                <li><a href="#"> <i class="fa fa-phone"></i> 0258 7666638</a></li>
                                <li><a href="#"> <i class="fa fa-whatsapp"></i> +58 414 5822005</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <div class="row">
                                    <img class="image--logo" src="{{ asset('img/logo_biogaleno_2.png') }}" alt="">
                                    <p class="title--logo">Biogaleno</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a id="home"     class="link--menu" href="{{ url('/') }}">Inicio</a></li>
                                    <li><a id="about"    class="link--menu" href="{{ url('/about') }}">Sobre nosotros</a></li>
                                    <li><a id="services" class="link--menu" href="{{ url('/services') }}">Nuestros servicios</a></li>
                                    <li><a id="contact"  class="link--menu" href="{{ url('/contact') }}">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>