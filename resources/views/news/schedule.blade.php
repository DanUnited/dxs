
@extends('news')
@section('title')
    Расписание художественной школы
@stop

@section('head')
    Расписание занятий
@stop

@section('breadcrumb')
    <a href="/">Главная</a> /
    Расписание занятий
@stop
@section('text')

    <div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#schedule_1" aria-controls="schedule_1" role="tab" data-toggle="tab">Расписание 1 смена</a></li>
            <li role="presentation"><a href="#schedule_2" aria-controls="schedule_2" role="tab" data-toggle="tab">Расписание 2 смена</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="schedule_1">
                <img src="/docs/schedule/schedule_2.jpg" width="100%" alt="Раписание занятий 1 смена" />
            </div>
            <div role="tabpanel" class="tab-pane" id="schedule_2">
                <img src="/docs/schedule/schedule_1.jpg" width="100%" alt="Раписание занятий 2 смена" />
            </div>
        </div>

    </div>
@stop
