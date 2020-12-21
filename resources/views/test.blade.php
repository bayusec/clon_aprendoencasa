@extends('layouts/app')
@section('extraheader')
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
@endsection

@section('content')
{{--    <div class="container first">--}}
{{--        <div class="row">--}}
{{--            <div class="col bg-warning">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--            <div class="col bg-success">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--            <div class="col bg-warning">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col bg-warning">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--            <div class="col bg-success">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--            <div class="col bg-warning">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--            <div class="col bg-success">--}}
{{--                One of three columns--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container px-lg-5">
        <div class="row mx-lg-n5">
            <div class="col py-3 px-lg-5 border bg-light">Custom column padding</div>
            <div class="col py-3 px-lg-5 border bg-light">Custom column padding</div>
        </div>
    </div>
@endsection