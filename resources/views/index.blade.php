@extends('base')
@section('body')
    <!-- SLIDER -->
    <div class="contentheader margins">
        <div class="mid">
            <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item  active">
                        <img src="/img/slider/3.jpg" alt="">
                        <div class="carousel-caption">
                            Программа «живопись». Прием детей с 10 до 13 лет
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/slider/2.jpg" alt="">
                        <div class="carousel-caption">
                            561 аудиторных часов по дисциплине "Рисунок"
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/slider/4.jpg" alt="">
                        <div class="carousel-caption">
                            495 ч. по дисциплине "Живопись" за весь курс обучения
                        </div>
                    </div>
                    <div class="item">
                        <img src="/img/slider/1.jpg" alt="">
                        <div class="carousel-caption">
                            Изучение станковой и декоративной композиции
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--ENDSLIDER-->
    <!-- Content -->
    <div class="mid">
        <section class="articleblock">
            <h2>Расписание занятий</h2>
            <article>
                <div class="thumbnail">
                    <img src="/img/article/schedule.png">
                </div>
                <p>
                    Утверждено расписание занятий детской художественной школы на 2017-2018 уч. год
                </p>
                <a href="/news/schedule" class="btn btn-primary"> Открыть раписание </a>
            </article>
        </section>

        <section class="articleblock right">
            <h2><a href="/news/historyschool">История создания школы</a></h2>
            <article>
                Решение об открытии детской художественной школы в станице Ленинградской принято Советом народных
                депутатов в 1988 году.
                Активную позицию по этому вопросу занимал председатель Совета Бондаренко Владимир Ильич. Решение было
                принято,
                но здания, пригодного для обучения, не было. Решено было восстановить здание 1906 года постройки для
                детской художественной школы.
            </article>
            <div class="divider"></div>
            <a href="/news/historyschool" class="readmore">Читать далее <span class="glyphicon glyphicon-forward"
                                                                              aria-hidden="true"></span></a>
        </section>

        <section class="articleblock">
            <h2>Общие сведения</h2>
            <article>
                В художественной школе в настоящее время преподаются различные художественные дисциплины в рамках двух
                программ:
                <p>дополнительные общеразвивающие общеобразовательные программы в области изобразительного искусства и
                    дополнительная предпрофиссиональная программа в области изобразительного искусства "Живопись".</p>
                <p>Занятия ведутся в две смены: с 8:00 первая смена и с 14:00 вторая смена. В школе шестидневная учебная
                    неделя.</p>
            </article>
            <div class="divider"></div>
            <div class="infoblock">
                <img src="/img/215.jpg">
                <p>Учащихся ежегодно обучаются в нашей школе</p>
            </div>
            <div class="infoblock">
                <img src="/img/cup.jpg">
                <p>Ежегодное участие в краевых и межрегиональных олимпиадах по рисунку и живописи</p>
            </div>
        </section>

        <section class="articleblock right">
            <h2>Программы обучения</h2>
            <article>
                Дополнительные общеразвивающие общеобразовательные программы в своем составе имеет следующие дисциплины:
                <ul>
                    <li>Рисунок</li>
                    <li>Живопись</li>
                    <li>Основы декоративно-прикладного творчества</li>
                    <li>Беседы об искусстве</li>
                </ul>
                Дополнительная предпрофессиональная общеобразовательная программа в области изобразительного искусства
                «Живопись»
                <ul>
                    <li>Рисунок</li>
                    <li>Живопись</li>
                    <li>Композиция станковая</li>
                    <li>Композиция декоративная</li>
                    <li>Беседы об искусстве</li>
                    <li>История изобразительного искусства</li>
                    <li>Пленэр</li>
                </ul>
            </article>
        </section>

    </div>
    <!--end content -->
@stop