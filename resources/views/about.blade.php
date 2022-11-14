@extends('app.layout')
@section('content')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Sobre nosotros</h3>
                        <p><a href="{{ url('/') }}">Inicio /</a> Sobre nosotros</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- business_expert_area_start  -->
    <div class="business_expert_area">
      
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <h3>Asociados Biomédicos Galeno C.A.</h3>
                                    <h3>R.I.F.: J-403636826</h3>
                                    <p>
                                        Somos una empresa de salud comprometida con el bienestar de nuestros pacientes, 
                                        contamos con personal de experiencia y entrenamiento en todas las áreas del laboratorio, 
                                        Asociados Biomédicos Galeno está interesado en el crecimiento profesional y constante actualización 
                                        en los avances tecnológicos y nuevos conocimientos en salud! Cumpliendo fielmente con la ética 
                                        y el buen ejercicio del Bioanalisis y la medicina.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('img/about/sobre_nosotros.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="{{ asset('img/about/sobre_nosotros_2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <p>
                                        Nuestras instalaciones son el reflejo de la cercanía con el paciente siempre con una atención personalizada, 
                                        humana y orientada al restablecimiento y mejora de su salud. 
                                        Somos especialistas en toma de muestra infantil y ofrecemos los resultados con la confiabilidad, 
                                        confidencialidad y rapidez que usted necesita!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business_expert_area_end  -->
    <script>
        var element = document.getElementById("about");
        element.classList.add("link--active");
    </script>
@endsection