<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
    <link href="{{ elixir('css/app.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ elixir('css/media.css') }}" type="text/css" rel="stylesheet" media="all">
    <title>
        @section('title')
            Детская художественная школа станицы Ленинградской
        @show
    </title>
    <meta name="keywords" content="детская, художественная, школа, ленинградская" />
    <meta name="description" content="детская художественная школа станицы Ленинградской" />
</head>
<body>
<div class="wrapper">
    <div class="body">
        <div class="topbar">
            <div class="mid">
                    <span class="leftside">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7 (86145)<span></span> 7-36-07
                    </span>
                    <span class="rightside" >
                        <abbr class="fontplus" title="Увеличить шрифт">Aa+</abbr>
                        <abbr class="fontnormal" title="Обычный размер шрифта">Aa</abbr>
                        <abbr class="fontminus" title="Уменьшить шрифт">Aa-</abbr>
                        <span id="simpletemplate">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            <span class="text" >Версия для слабовидящих</span>
                        </span>
                    </span>
            </div>
        </div>
        <div class="header">
            <!-- TITLE and School-->
            <div class="mid">
                <div class="height"></div>
                <div class="logotext">
                    <span>Мунициальное бюджетное</span>
                    <span>учреждение</span>
                    <span>дополнительного образования</span>
                    <h2><span>детская художественная</span><span>школа</span></h2>
                    <span>станицы Ленинградской</span>
                </div>
                <div class="school_img">
                    <img src="/img/school.png">
                </div>
            </div>
        </div>
        <!--MENU -->
        <div class="graymenu"><div class="mid">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false" aria-controls="bs-navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar">
                                </span> <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="menutitle">Меню</div>
                        </div>
                        <!--Default menu -->
                        <div class="navbar-collapse collapse" id="bs-navbar">
                            <ul class="nav navbar-nav">
                                <li class="{{ Ekko::isActiveRoute('main') }}"><a href="/">Главная <span class="sr-only">(current)</span></a></li>
                                <li class="dropdown {{ Ekko::isActiveRoute('compinfo') }}">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Сведения об организации <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/schoolinfo/basicinfo">Основные сведения</a></li>
                                        <li><a href="#">Структура и органы управления</a></li>
                                        <li><a href="/schoolinfo/docs">Документы</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Образование</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Образовательные программы и учебные планы</a></li>
                                        <li><a href="#">Годовой учебный график</a></li>
                                        <li><a href="/schoolinfo/staff">Руководство. Педагогический состав</a></li>
                                        <li><a href="#">Материально-техническое обеспечение</a></li>
                                        <li><a href="#">Платные образовательные услуги</a></li>
                                        <li><a href="#">Финансово-Хозяйственная деятельность</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Ekko::isActiveRoute('news') }}"><a href="#">Новости</a></li>
                                <li class="{{ Ekko::isActiveRoute('galery') }}"><a href="#">Галерея</a></li>
                                <li class="{{ Ekko::isActiveRoute('contacts') }}"><a href="/contacts">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div></div>
        <!-- ENDMENU -->
        @yield('body')
    </div>
    <footer class="footer">
        <div class="mid">
            <nav class="bottommenu">
                <ul>
                    <li><a href="/" class="{{ Ekko::isActiveRoute('main') }}">Главная</a></li>
                    <li><a href="" class="{{ Ekko::isActiveRoute('compinfo') }}">Сведения об организации</a></li>
                    <li><a href="" class="{{ Ekko::isActiveRoute('news') }}">Новости</a></li>
                    <li><a href="" class="{{ Ekko::isActiveRoute('galery') }}">Галерея</a></li>
                    <li><a href="" class="{{ Ekko::isActiveRoute('contacts') }}">Контакты</a></li>
                </ul>
            </nav>
            <div class="footerabout">
                <a href="/news/kak_zapisatsa_v_shkoly" class="enroll">Как записаться в школу</a>
                <p class="head3">Детская художественная школа</p>
                <p>станица Ленинградская, ул.Красная 149</p>
                <p class="head1">+7 (86145) <span></span>7-36-07</p>
            </div>
        </div>
    </footer>
    <!-- Кнопка наверх-->
    <span id="top-link-block" class="hidden">
        <a href="#top" class="well well-sm"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <i class="glyphicon glyphicon-chevron-up"></i> Наверх
        </a>
    </span>
</div>
</body>
<script src="/js/app.min.js"></script>
@section('scripts') @show
</html>