@extends('layouts/app')

@section('navbar_plan_link')
/plan/{{$data->first()->planes->id}}
@endsection
@section('navbar_plan_descripcion')
{{$data->first()->planes->descripcion}}
@endsection

@section('content')

{{--    <div class="row">--}}
{{--        --}}{{--   MENU ICONOS NAVEGACION    --}}
{{--        <div class="col-lg-12 my-2 icono-home navbar-collapse">--}}
{{--            <a class="btn ml-3 pl-3 pt-2" href="{{url('/')}}">--}}
{{--                <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>--}}
{{--                <span>Inicio</span>--}}
{{--            </a>--}}
{{--            <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path style="fill: #000;" d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg>--}}
{{--            <a class="btn" href="#">--}}
{{--                <span class="azul">{{$data->first()->planes->descripcion}}</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div id="detalleplan" class="row">
            <div class="col-lg-6 text-center my-1 pl-5">
                <div class="row">
    {{--    TITULO            --}}
                    <div class="col-lg-12 my-1">
                        <h1 class="my-2 logosh1plan">{{$data->first()->planes->descripcion}}</h1>
                    </div>
    {{--    IMAGEN            --}}
                    <div class="col-lg-12 my-1">
                        <img class="img-fluid imglogos"  src="{{url($extra["img"])}}"/><br/>
                    </div>
    {{--    PDF BIENVENIDA    --}}
                    <div class="col-lg-12 my-1">
                        <span class="btn btn-primary btn-bienvenida"><a target="_blank" href="{{url($extra["pdf"])}}">¡Bienvenidas y bienvenidos!</a></span>
                    </div>
    {{--    TEXTO BIENVENIDA  --}}
                    <div class="col-lg-12 my-1 mx-3">
                        <span>{{$extra["texto"]}}</span>
                    </div>
    {{--    LINKS RADIO Y TV  --}}
                    <div class="col-lg-12 my3">
                        <div class="row">
                            <div class="col-lg-6">
                                <img title="Radio" src="{{url('imgs/radio.svg')}}"/>
                            </div>
                            <div class="col-lg-6">
                                <img title="TV" src="{{url('imgs/tv.svg')}}"/>
                            </div>
                            <div class="col-lg-6">
                                <select class="selectpicker" >
                                    <option>RADIO</option>
                                    <option>Mustard</option>
                                    <option>Mustard</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <select class="selectpicker" >
                                        <option>TV</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  COLUMNA IZQUIERA DONDE MUESTRA LOS GRADOS      --}}
            <div class="col-lg-6 text-center my-auto">
                <div class="row my-auto  mx-3 px-5">
                    @foreach($data as $planes)
                        @if(!$planes->vista_normal)
                            <div class="col-lg-6 col-md-6 my-2" align="center">
                                <div class="card p-2 c-grados" style="width: 180px;"><a class="card-body stretched-link my-auto" href="{{url("/plan/{$planes->planes->id}/grado/{$planes->grados->id}")}}">{{$planes->grados->descripcion}}</a></div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="row my-auto  mx-3 px-5" id="gradosextra">
                    @foreach($data as $planes)
                         @if($planes->vista_normal)
                             <div class="col-lg-6 col-md-6 my-2" align="center">
                                 <div class="card p-2 c-grados" style="width: 180px;"><a class="card-body stretched-link my-auto" href="{{url("/plan/{$planes->planes->id}/grado/{$planes->grados->id}")}}">{{$planes->grados->descripcion}}</a></div>
                             </div>
                            @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

