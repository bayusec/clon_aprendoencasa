@extends('layouts/app')
@php $nabvar=true
@endphp

@section('navbar_plan_link')
    /plan/{{$data->first()->planes->id}}
@endsection
@section('navbar_plan_descripcion')
    {{$data->first()->planes->descripcion}}
@endsection

@section('navbar_extra_bloque')
    <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path style="fill: #000;" d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg>
    <a class="btn" href="/plan/{{$data->first()->planes->id}}/grado/{{$data->first()->grados->id}}">
        <span class="azul">{{$data->first()->grados->descripcion}}</span>
    </a>
@endsection

@section('content')
<div id="grados" class="container" style="max-width: 1200px;">
    <div id="detallegrado" class="row  align-items-center" style="height: 400px;">
        <div class="col-lg-6">
            <div class="text-center">
                <span >{{$data->first()->grados->descripcion}}</span><br/>
                <span>¡Comencemos!</span>
            </div>
        </div>
        <div class="col-lg-6 text-left">
            <div class="row justify-content-around">
                @php $var=1; @endphp
                @foreach($data as $grados)
                    @if($var%2!==0)
                        <div class="offset-lg-2 offset-md-2"></div>
                    @endif
                    <div class="col-lg-4 col-md-4 my-2" align="center">
                        <div class="card c-grados" style=" width: 180px;height: 120px;">
                            <a style="font-size: 11px !important;" class="card-body stretched-link my-auto" href="{{url("/plan/{$grados->planes->id}/grado/{$grados->grados->id}/materia/{$grados->materias->id}")}}">
                                <img src="{{url($grados->materias->img)}}" alt="{{$grados->materias->descripcion}}"><br/>
                                {{$grados->materias->descripcion}}
                            </a>
                        </div>
                    </div>
                    @if($var%2==0)
                            <div class="offset-lg-2 offset-md-2"></div>
                    @endif
                    @php $var++; @endphp
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
