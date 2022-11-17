@extends('app.layout')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> 
                                    <span>
                                        <!-- Asociados  -->
                                        Biomédicos 
                                    </span> <br>
                                    Galeno c.a. 
                                </h3>
                                <p>
                                    Al cuidado de tu salud y la de tu familia.
                                    <br> 
                                    Un servicio amable, confiable, confidencial y rápido!
                                </p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Chequea Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> 
                                    <span>Health care</span> <br>
                                    For Hole Family 
                                </h3>
                                <p>
                                    In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.
                                </p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Chequea Nuestros Servicios</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- slider_area_end --> 

    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb mb-4">
                        <div class="thumb_1">
                            <img src="{{ asset('img/about/prod_187.jpg') }}" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="{{ asset('img/about/prod_187.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Bienvenido a Asociados Biomédicos Galeno C.A.</h2>
                        <h3>
                            Su Mejor Opción Para<br>
                            Examenes Médicos
                        </h3>
                        <p>
                            Ofrecemos un procesamiento responsable y con reactivos de alta calidad 
                            para la realización de tus exámenes! Con personal profesional y especializado.
                        </p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Pruebas Hormonales</li>
                            <li> <i class="flaticon-right"></i> Perfil Preoperatorio</li>
                            <li> <i class="flaticon-right"></i> Examenes de rutina y emergencias </li>
                            <li> <i class="flaticon-right"></i> Bacteriología</li>
                            <li> <i class="flaticon-right"></i> Inmunología</li>
                        </ul>
                        <a href="{{ url('/about') }}" class="boxed-btn3-white-2">Leer más</a>
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