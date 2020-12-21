<div class="row">
    {{--   MENU ICONOS NAVEGACION    --}}
    <div class="col-lg-12 d-none d-sm-block my-2 icono-home navbar-collapse mb-3">
        <a class="btn ml-3 pl-3 pt-2" href="{{url('/')}}">
            <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>
            <span>Inicio</span>
        </a>
        <svg focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path style="fill: #000;" d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg>
        <a class="btn" href="@yield('navbar_plan_link')">
            <span class="azul">@yield('navbar_plan_descripcion')</span>
        </a>
        @yield('navbar_extra_bloque')
    </div>
</div>
