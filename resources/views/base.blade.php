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
    <meta name="keywords" content="детская, художественная, школа, ленинградская"/>
    <meta name="description" content="Официальный сайт художественной школы Ленинградского района"/>

    <meta property="place:location:latitude" content="46.3260"/>
    <meta property="place:location:longitude" content="39.3958"/>
    <meta property="business:contact_data:street_address" content="Красная 149"/>
    <meta property="business:contact_data:locality" content="Ленинградская"/>
    <meta property="business:contact_data:postal_code" content="353740"/>
    <meta property="business:contact_data:country_name" content="Russia"/>
    <meta property="business:contact_data:email" content="dxs@yandex.ru"/>
    <meta property="business:contact_data:phone_number" content="+7 8614573607"/>
</head>
<body>
<div class="wrapper">
    <div class="body">
        <header>
            <section class="topbar">
                <div class="mid">
                    <span class="leftside">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7 (86145)<span></span> 7-36-07
                    </span>
                    <span class="rightside">
                        <div class="template-settings">
                            <abbr class="fontnormal" title="Обычный размер шрифта">Aa</abbr>
                            <abbr class="fontplus" title="Увеличенный шрифт">Aa+</abbr>
                            <abbr class="fontminus" title="Большой шрифт">AА</abbr>
                        </div>
                        <span id="simpletemplate">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            <span class="text">Для слабовидящих</span>
                        </span>
                         <abbr title="Авторизация" id="auth">
                             <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                             <span>Войти</span>
                         </abbr>
                    </span>
                </div>
            </section>
            <section class="header">
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
            </section>
            <!--MENU -->
            <section class="graymenu">
                <div class="mid">
                    <nav class="navbar navbar-default" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#bs-navbar" aria-expanded="false" aria-controls="bs-navbar">
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
                                    <li class="{{ Ekko::isActiveRoute('main') }}"><a href="/" itemprop="url"><span
                                                    itemprop="name">Главная</span><span
                                                    class="sr-only">(current)</span></a></li>
                                    <li class="dropdown {{ Ekko::isActiveRoute('article') }}">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false"><span itemprop="name">Сведения об организации</span><span
                                                    class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/schoolinfo/basicinfo" itemprop="url"><span itemprop="name">Основные сведения</span></a>
                                            </li>
                                            <li><a href="#"><span
                                                            itemprop="name">Структура и органы управления</span></a>
                                            </li>
                                            <li><a href="/schoolinfo/docs" itemprop="url"><span itemprop="name">Документы</span></a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><span itemprop="name">Образование</span></a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><span itemprop="name">Образовательные программы и учебные планы</span></a>
                                            </li>
                                            <li><a href="#"><span itemprop="name">Годовой учебный график</span></a></li>
                                            <li><a href="/schoolinfo/staff" itemprop="url"><span itemprop="name">Руководство. Педагогический состав</span></a>
                                            </li>
                                            <li><a href="#"><span
                                                            itemprop="name">Материально-техническое обеспечение</span></a>
                                            </li>
                                            <li><a href="#"><span itemprop="name">Платные образовательные услуги</span></a>
                                            </li>
                                            <li><a href="#"><span
                                                            itemprop="name">Финансово-Хозяйственная деятельность</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="{{ Ekko::isActiveRoute('news') }}"><a href="#"><span itemprop="name">Новости</span></a>
                                    </li>
                                    <li class="{{ Ekko::isActiveRoute('galery') }}"><a href="#"><span itemprop="name">Галерея</span></a>
                                    </li>
                                    <li class="{{ Ekko::isActiveRoute('contacts') }}"><a href="/contacts"
                                                                                         itemprop="url"><span
                                                    itemprop="name">Контакты</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </section>
            <!-- ENDMENU -->
        </header>
        <div itemscope itemtype="http://schema.org/WebPage">
            <meta itemprop="name" content="Детская художественная школа станицы Ленинградской"/>
            <meta itemprop="description" content="Официальный сайт художественной школы Ленинградского района"/>

            @yield('body')
        </div>
    </div>
    <footer class="footer">
        <div class="mid">
            <nav class="bottommenu" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
        <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <i class="glyphicon glyphicon-chevron-up"></i> Наверх
        </a>
    </span>
</div>
<div class="user-form" id="auth-form" data-vision="1" style="display: none">
    <div class="outer">npm install --save vue vueify browserify-hmr babel-runtime vueify-insert-css vueify
        vue-hot-reload-api babel-plugin-transform-runtime
        npm install
        @include('auth.login')
    </div>
</div>
</body>
<script src="/js/app.min.js"></script>
@section('scripts') @show
</html>