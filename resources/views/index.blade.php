@extends('layouts/app')

@section('display-logo-aprendo')
    style="display:none"
@endsection


@section('content')
    <div id="contenido"  class="container">
        <div id="subheader" class="row align-items-center justify-content-center">
            <div class="col12">
                <img class="" src="{{url('imgs/aprendo-en-casa.svg')}}">
            </div>
        </div>
    </div>

        {{--  LOGOS DE PLANES DE ESTUDIOS      --}}
    <div class="container">
        <div id="logos-planes" class="row justify-content-center">
            @foreach($data as $d)
                <div class="col-lg-4 col-xl-4 col-md-6 align-items-center py-1 ">
                    <a title="{{$d->descripcion}}" href="{{url("/plan/{$d->id}")}}">
                        <img class="card-img imglogos" src="{{url($d->link)}}" />
                        <h1 class="my-2 logosh1">{{$d->descripcion}}</h1>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row my-5 text-center">
            <div class="col-lg-4"><span class="btn btn-primary btn-recursos my-3">Encuentra Orientaciones</span></div>
            <div class="col-lg-4"><span class="btn btn-primary btn-recursos my-3">Descubre más recursos</span></div>
            <div class="col-lg-4"><span class="btn btn-primary btn-recursos my-3">Programación de Radio y TV</span></div>
        </div>
    </div>
@endsection


{{--            <div id="colbutton" class="col align-self-sm-center align-self-center">--}}
{{--                <button class="float-left float-sm-right btn btn-primary btn-secondary" role="button">--}}
{{--                    <span>Compartir</span>--}}
{{--                </button>--}}
{{--            </div>--}}