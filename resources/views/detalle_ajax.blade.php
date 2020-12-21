<br/>
<div class="container-fluid">
    @foreach($data AS $recurso)
        <div class="row">
            <h4>{{$recurso["seccion"]}}</h4>
            <hr>
        </div>
        <div class="row recursos-card">
            @foreach($recurso["data"] AS $rec)
                <div title="{{$rec["titulo"]}}" class="col-xl-4 col-lg-3 col-md-3 card pt-4 mt-3">
                    <a href="{{url($rec["link"])}}" target="_blank">
                        <img class="card-img-top" src="{{url("/imgs/".$rec["img"].".svg")}}">
                        <div class="card-body">
                            <p title="{{$rec["titulo"]}}" class="card-text">{{$rec["titulo"]}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br/>
    @endforeach
</div>
