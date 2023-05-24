@extends('layouts.app')
@section('title', $project->name)

@section('content')
    <div class="container">
        <div class="row text-bg-dark p-5 rounded-3 d-flex align-items-center">
            <div class="col-12 col-md-6 px-0 h-100">
                <h1 class="display-4 fw-bold">{{$project->name}}</h1>
                <h1>{{$project->category}}</h1>
                <p class="lead my-3">{{$project->resume}}</p>
                <a class="btn-custom collapsed btn rounded-pill" href="{{$project->git}}">
                    GitHub 
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <div class="col-12 col-md-6 px-0 rounded-3">
                <div class="videoplayer rounded-3" id="myCustomPlayer">
                    <div class="bg-dark rounded-3">
                        <video class="video rounded-top" src="{{asset("vid/$project->video")}}"></video>
                    </div>
                    <div class="controls rounded-bottom">
                       <button class="btn btn-lg btn-video-playpause" type="button" title="Play Video">
                           <i class="bi bi-play-fill"></i>
                           <i class="bi bi-pause-fill d-none"></i>
                       </button>
                       <div class="px-1 w-100">
                           <div class="progress w-100">
                               <div class="progress-bar"></div>
                           </div>
                       </div>
                       <button class="btn btn-lg btn-video-pip" title="Play picture in picture">
                           <i class="bi bi-pip"></i>
                       </button>
                       <button class="btn btn-lg btn-video-fullscreen">
                           <i class="bi bi-arrows-fullscreen"></i>
                       </button>
                       <div class="dropup">
                           <button class="btn btn-lg btn-video-volume" data-bs-toggle="dropdown" title="Volume">
                               <i class="bi bi-volume-mute-fill"></i>
                           </button>
                           <div class="dropdown-menu dropdown-menu-end dropup-volume">
                               <input type="range" class="form-range form-range-volume">
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <p class="lead my-3">{{$project->description}}</p>
        </div>
    </div>
    <script>
        var myPlayer = new BootstrapVideoplayer('myCustomPlayer');
    </script>
@endsection
