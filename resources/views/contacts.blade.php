@extends('news')
@section('title')
    Контакты. Обратная связь
@stop

@section('head')
    Контакты. Обратная связь
@stop

@section('breadcrumb')
    <a href="/">Главная</a> /
    Контакты
@stop
@section('scripts')
    @parent
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAD-wtLs7788rqSfA5dl3RtXLEKroS_TeY">
    </script>
@stop
@section('text')
    <span itemscope itemtype="http://schema.org/School">
    <h2>Основные данные</h2>
    <p itemprop="name"><b>Наименование:</b> Муниципального бюджетное учреждение дополнительного образования «Детская художественная школа» станицы Ленинградской муниципального образования Ленинградский район</p>
    <p><b>Адрес организации:</b><address
                itemprop="address">353740, ст. Ленинградская, ул. Красная 149, филиалов нет</address>
        </p>
        <p itemprop="telephone"><b>Телефон:</b> +7 (86145) 7-36-07</p>
    <p><b>E-mail:</b> <a href="mailto:rtschool2.tomsk@mail.ru" itemprop="email">dxs@yandex.ru</a></p>
    <h2>Вам ответят</h2>
    <p itemprop="owns"><b>Кузнецов Игорь Анатольевич</b>, директор.</p>
    <p>Контактный телефон: 8(918) 498-0-149</p>
    <p itemprop="employee"><b>Кузнецова Эльвира Валентиновна</b>, зам. директора по учебно-методической работе.</p>
    <p>Контактный телефон: 8 (918) 690-0-387</p>
    <p><b>Иванова Светлана Александровна</b>, секретарь.</p>
    <h3>Карта проезда</h3>
    <div id="map">
    </span>
    <!--<h2>Связаться с нами</h2>
    <p>Вы сможете отправить сообщение на электронную почту школы с помощью формы ниже.</p>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Ваша электронная почта (Email)</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="name">Ваше имя</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
        </div>
        <button type="submit" class="btn btn-default">ОтправитьТуче</button>
    </form>-->
@stop