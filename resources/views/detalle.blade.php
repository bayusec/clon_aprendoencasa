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
@if (isset($data->first()->materias->id))
    <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path style="fill: #000;" d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg>
    <a class="btn" href="/plan/{{$data->first()->planes->id}}/grado/{{$data->first()->grados->id}}/materia/{{$data->first()->materias->id}}">
        <span class="azul">{{$data->first()->materias->descripcion}}</span>
    </a>
@endif
@endsection

@section('content')
    <script>
        function detalle(idbtn,plan_id,grado_id,materia_id,semana_id){
            $(".slick-current").removeClass("slick-current");
            $("#btn"+idbtn).parent().parent().addClass("slick-current");

            axios.get("/detalle/"+plan_id+"/"+grado_id+"/"+materia_id+"/"+semana_id)
                .then(response => {
                    $("#contenido").html(response.data);
                })
                .catch(e => {
                    // Capturamos los errores
                })
        }

        $(document).ready(function(){
            initSlide ={{$len}} > {{$len}}-5? {{$len}}-5:{{$len}};

            $('.multiple-items').on('afterChange', function(event, slick, currentSlide){
                $('.multiple-items span')[currentSlide].click();
            });

            $('.multiple-items').slick({
                infinite: false,
                slidesToShow: 5,
                slidesToScroll: 2,
                initialSlide:initSlide,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 1008,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }

                ]
            });
            $('.multiple-items span').last().click();
        });
    </script>

    <div class="container mt-3">
        <div id="slicksemanas" class="row">
            <div data-slick='' class="col-lg-12 col-md-12 col-sm-12 col-12 slider multiple-items w-auto text-center">
                @foreach($data AS $k=> $but)
                    <span id="btn{{$k+1}}" class="boton-carousel btn btn-primary mx-4" onclick="detalle({{($k+1).",".$but->plan_id.",".$but->grado_id.",".(empty($but->materia_id)?0:$but->materia_id).",".$but->id}})">{{$but->descripcion}}</span>
                @endforeach
            </div>
    {{--        <span class="text-center">Recuerda que las descargas de archivos en PDF de la web aprendoencasa.pe no consumen los datos de tu móvil. Los videos alojados fuera de la web (como en Youtube) pueden consumir su plan de datos; por tal motivo, recomendamos conectarse a una red wifi</span>--}}
        </div>
    </div>

    <div class="container my-1 text-center">
        <div class="row">
            <div class="col-12 my-2" id="contenido">

            </div>
        </div>
    </div>
@endsection