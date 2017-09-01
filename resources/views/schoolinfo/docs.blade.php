@php
    $mas = [
        ['Полный список обучающихся на 2017-2018', '/docs/spisok_obuchauwihsya_2017-2018.doc'],
        ['ПОЛОЖЕНИЕ О ФОРМЕ ПОЛУЧЕНИЯ ОБРАЗОВАНИЯ И ФОРМЕ ОБУЧЕНИЯ','/docs/forma_obucheniya.doc'],
        ['Порядок зачёта результатов освоения обучающимися учебных предметов, практики, дополнительных образовательных программ в других организациях, осуществляющих образовательную деятельность','/docs/poryadoc_zachota.doc'],
        ['Правила поведения учащихся','/docs/pravila_povedeniya_uchashihsya.doc'],
        ['Положение о порядке приема обучающихся на обучение по дополнительным общеразвивающим программам в области искусств','/docs/polojenie_o_poryadke_priema_na_op.doc'],
        ['Правила приема и отбора детей в целях обучения по дополнительной предпрофессиональной общеобразовательной программе в области искусств «Живопись»','/docs/polojenie_priem_i_otbor_jiwopis.doc'],
        ['Положение о нормативном локальном акте','/docs/polojenie_o_normativnom_loc_acte.doc'],
        ['Положение о формах, периодичности и порядке текущего контроля успеваемости, промежуточной аттестации','/docs/polojenie_o_tec_promejut_attestacii.doc'],
        ['Положение о порядке оформления возникновения, приостановления и прекращении образовательных отношений между МБУДОДХШ ст. Ленинградской и обучающимися и (или) родителями (законными представителями) несовершеннолетних обучающихся','/docs/poryadoc_oformleniya_prekrawenii_ontowenyi.doc'],
        ['Положение об особенностях направления в служебные командировки работников муниципального бюджетного учреждения дополнительного образования «Детская художественная школа» станицы Ленинградской','/docs/polojenie_o_komandirovkah.doc'],
        ['ПОЛОЖЕНИЕ о порядке обеспечения создания и ведения официального сайта муниципального бюджетного учреждения дополнительного образования «Детская художественная школа» станицы Ленинградской','/docs/polojenie_o_vedenii_saita.doc'],
        ['ПОЛОЖЕНИЕ О ПОРЯДКЕ о порядке посещения обучающимися мероприятий, проводимых муниципальным бюджетным учреждением дополнительного образования «Детская художественная школа» ст. Ленинградской','/docs/poryadoc_posewenyi_meropriyatii.doc'],
        ['Положение об Общем собрании трудового коллектива','/docs/polojenie_ob_obwem_sobranii_rabotnokov.doc'],
        ['ПОЛОЖЕНИЕ О ПЕДАГОГИЧЕСКОМ СОВЕТЕ','/docs/polojenie_ob_pedsovete.doc'],
        ['Порядок осуществления индивидуального учета результатов освоения обучающимися образовательных программ, хранения в архивах информации об этих результатах на бумажных носителях','/docs/poryadoc_osvoenie_rezultatov.doc'],
        ['Положение о Совете родителей (законных представителей) несовершеннолетних обучающихся','/docs/polojenie_o_sovete_roditeley.doc'],
        ['Порядок обучения по индивидуальному учебному плану, сокращенным образовательным программам','/docs/polojenie_o_sokrawennih_programmah.doc'],
        ['Порядок ознакомления со свидетельством о государственной регистрации, с уставом, лицензией на осуществление образовательной деятельности, с учебной документацией, другими документами, регламентирующими организацию и осуществление образовательной деятельности в образовательной организации.','/docs/poryadoc_oznakomleniya_s_ustavom.doc'],
        ['Положение о порядке пользования библиотечно-информационными ресурсами МБУДО ДХШ ст.Ленинградской','/docs/polojenie_o_polzovanii_bibliotechnimi_resursami.doc'],
        ['ПОЛОЖЕНИЕ о порядке и форме проведения итоговой аттестации обучающихся, освоивших дополнительную предпрофессиональную общеобразовательную программу в области искусств «Живопись»','/docs/polojenie_provedeniya_attestacii.doc'],
        ['Положение О ПОРЯДКЕ ВЫДАЧИ СВИДЕТЕЛЬСТВА ОБ ОСВОЕНИИ ДОПОЛНИТЕЛЬНЫХ ПРЕДПРОФЕССИОНАЛЬНЫХ ПРОГРАММ В ОБЛАСТИ ИСКУССТВ','/docs/poryadoc_vidachi_svidetelstva.doc'],
        ['ПОЛОЖЕНИЕ о порядке выдачи лицам, освоившим дополнительные общеразвивающие программы в области искусства, документы об обучении','/docs/polojenie_vidacha_svidetelstva_po_dopolnitelnim.doc'],
        ['ПОЛОЖЕНИЕ о правилах перевода обучающихся с одной образовательной программы на другую','/docs/polojenie_o_perevode_na_druguy_programmy.doc'],
        ['План-график размещения заказов на поставки товаров, выполнение работ, оказание услуг для нужд заказчиков','/docs/plan_razmesheniya_zakazov.doc'],
    ];

    array_walk($mas,function(&$val){
        $val = Array('title'=>$val[0],'url'=>$val[1]);
    })

@endphp
@extends('base')
@section('title')
    ДХШ: Документы
@stop
@section('body')
    @parent
    <div class="contentheader">
        <div class="mid">
            <h2>Документы</h2>
            <div class="breadcrumb" itemprop="breadcrumb">
                <a href="/">Главная</a> /
                Сведения об организации /
                Документы
            </div>
        </div>
    </div>
    <div class="contentpage">
        <div class="mid">
            <article class="staffarticle">
                <div class="viewdocs">
                    <iframe class="docviewer" src=""></iframe>
                    <div class="closeview">Закрыть</div>
                </div>
                <div class="loadindicator" style="display: none">
                    <div class="animationload">
                        <div class="osahanloading"></div>
                    </div>
                </div>

                <table class="tabledoc">
                    @foreach ($mas as $doc)
                        <tr>
                            <td class="link"><a href="{{$doc['url']}}">{{$doc['title']}}</a></td>
                            <td class="type"><a href="{{$doc['url']}}"><span class="glyphicon glyphicon-download-alt"></span> </a></td>
                        </tr>
                    @endforeach

                </table>
                <article class="singleton">
                    <p>*Все документы можно просмотреть без скачивания прямо на нашем сайте.</p>
                </article>
            </article>

            <aside class="rightmenu">
                @include('rightmenu')
            </aside>
        </div>
    </div>
@stop