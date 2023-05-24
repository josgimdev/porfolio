@extends('layouts.app')
@section('title', 'Proyectos')

@section('content')
  <div class="row row-cols-1 row-cols-lg-2 g-3">
    @foreach ($projects as $project)
      <div class="col" onclick="flip({{$loop->iteration}})">
        <div class="proyecto">
          <img src="{{asset("img/$project->image")}}" alt="...">
          <div class="texto">
            <h3 class="titulo fw-bold">{{$project->name}}</h3>
            <h4 class="categoria">{{$project->category}}</h4>
            <p class="cuerpo lead my-3">{{$project->resume}}</p>
            <div class="d-flex justify-content-center">
              <a class="btn btn-light rounded-4" href="{{route('projects.show', $project)}}">Ir al proyecto</a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
