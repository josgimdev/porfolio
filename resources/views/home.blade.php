@extends('layouts.app')
@section('title', 'Josep Gimeno Devis')

@section('content')
    <div id="main" class="d-block">
        <section id="informacion-personal">
            <p class="titulo">
                Información personal
            </p>
            <p class="cuerpo">¡Hola! Soy un estudiante de ingeniería multimedia de la ETSE y estoy muy entusiasmado por formar parte de la emocionante industria de la tecnología y los medios. Me apasiona la creación de contenido multimedia y la exploración de nuevas formas de comunicación digital. Me gusta trabajar en proyectos creativos y técnicos, y disfruto aprendiendo sobre las últimas tendencias en diseño gráfico, animación, programación y la simulacióno. Me considero una persona proactiva, comprometida y perseverante, siempre dispuesto a afrontar nuevos desafíos y encontrar soluciones innovadoras. Siempre estoy dispuesto a colaborar con otros y aportar mis habilidades para crear proyectos multimedia únicos e impactantes. ¡Estoy emocionado de ver lo que el futuro me depara y de seguir aprendiendo y creciendo en esta fascinante industria!</p>
        </section>
        <!-- Proyectos -->
        <section id="proyectos">
            <!-- Proyectos -->
            <div class="d-none d-md-block">
                <p class="titulo">
                    Proyectos
                </p>
                <div class="galeria">
                    <a class="imagen" href="#">
                        <video id="v" src="{{ asset('vid/banderas.mp4') }}" loop muted></video>
                        <p class="titulo">
                            Proyecto 1
                        </p>
                        <p class="cuerpo">
                            En este proyecto podemos ver una simulación de tres tipos de mallas para unir nodos con unas banderas las cuales tienen tanto gravedad como un viento que las mueve.
                        </p>
                    </a>
                    <a class="imagen" href="#proyecto2">
                        <video id="v" src="vid/flores.mp4" loop muted></video>
                        <p class="titulo">
                            Proyecto 2
                        </p>
                        <p class="cuerpo">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium eius sint consectetur vel temporibus, distinctio optio...
                        </p>
                    </a>
                    <a class="imagen" href="#proyecto3">
                        <video id="v" src="vid/flores.mp4" loop muted></video>
                        <p class="titulo">
                            Proyecto 3
                        </p>
                        <p class="cuerpo">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium eius sint consectetur vel temporibus, distinctio optio...
                        </p>
                    </a>
                    <a class="imagen" href="#proyecto4">
                        <video id="v" src="vid/flores.mp4" loop muted></video>
                        <p class="titulo">
                            Proyecto 4
                        </p>
                        <p class="cuerpo">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium eius sint consectetur vel temporibus, distinctio optio...
                        </p>
                    </a>
                    <a class="imagen" href="#proyecto5">
                        <video id="v" src="vid/flores.mp4" loop muted></video>
                        <p class="titulo">
                            Proyecto 5
                        </p>
                        <p class="cuerpo">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi laudantium eius sint consectetur vel temporibus, distinctio optio...
                        </p>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection