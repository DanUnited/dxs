@extends('base')
@section('body')
    <div class="contentheader">
        <div class="mid">
            <h2>@yield('head')</h2>
            <div class="breadcrumb">
                @yield('breadcrumb')
            </div>
        </div>
    </div>
    <div class="contentpage">
        <div class="mid">
            <article class="singleton">
                @yield('text')
            </article>
        </div>
    </div>
@stop