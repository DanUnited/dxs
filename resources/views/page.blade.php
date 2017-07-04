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
            <article>
                @yield('text')
            </article>
            <aside class="rightmenu">
                @include('rightmenu')
            </aside>
        </div>
    </div>
@stop