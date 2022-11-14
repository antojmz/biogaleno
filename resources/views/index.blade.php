@extends('app.layout')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Chequea Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>
                                    In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.
                                </p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Chequea Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>
                                    In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.
                                </p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Chequea Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end --> 

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="{{ asset('img/about/1.png') }}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{ asset('img/about/2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <!-- <h2>Bienvenido a Biogaleno</h2> -->
                        <h2>Bienvenido a Asociados Biomédicos Galeno</h2>
                        <h3>
                            Su Mejor Opción Para<br>
                            Examenes Médicos
                        </h3>
                        <p>
                            Esteem spirit temper too say adieus who direct esteem.
                            It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.
                        </p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Apartments frequently or motionless. </li>
                            <li> <i class="flaticon-right"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
                            <li> <i class="flaticon-right"></i> Voluptatem quia voluptas sit aspernatur. </li>
                        </ul>
                        <a href="{{ url('/about') }}" class="boxed-btn3-white-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->
    <script>
        var element = document.getElementById("home");
        element.classList.add("link--active");
    </script>
@endsection