"use strict";

window.addCss = function ($filename) {
    var head = document.getElementsByTagName('head')[0];
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.type = 'text/css';
    link.href = '/css/' + $filename;
    link.media = 'all';
    head.appendChild(link);
};

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires + ";PATH=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/**
 * Animate Articles
 */

jQuery(document).ready(function () {
    jQuery('.articleblock').addClass('scale0');
    jQuery('.articleblock h2').viewportChecker({
        offset: 0,
        callbackFunction: function (elem, action) {
            var article = elem[0].parentElement;
            $(article).addClass('moveDown');
            setTimeout(function () {
                $(article).addClass('show');
            }, 20);
            setTimeout(function () {
                $(article).removeClass('scale0 moveDown show');
            }, 820);
        },
    });

    // Yandex Распознавание речи
    window.speak = function(text,that){
        window.tts = new ya.speechkit.Tts(
            // Настройки синтеза. Список доступных настроек см. в справочнике.
            {
                // API-ключ. Может быть задан глобально через объект ya.speechkit.settings.
                apikey: '9dc308e1-c192-4a7a-b80a-98c2be3a1509',
                // Эмоциональная окраска: добрый голос. neutral, good, evil
                emotion: 'good',
                // Скорость речи.
                speed: 1.0,
                // Имя диктора. valtz
                speaker: 'valtz',
                //Качество минимум из за размера
                quality: 'low',
                stopCallback: function(){
                    $(that).prop('disabled', false);
                    $(that).children('i').removeClass('move');
                }
            }
        );
        window.tts.speak(text);
    };


    $('button.voice').click(function(){
        var $that = $(this);
        var $voice_text = $(this).closest('section');

        if($voice_text.length > 0){
            $that.children('i').addClass('move');
            $that.prop('disabled', true);
            speak($voice_text.children('article').text().replace(/\s{2,}/g, ' '),$that);
        }else {
            $voice_text = $that.closest('article');
            $that.prop('disabled', true);
            if($voice_text.length > 0) speak($voice_text.text().replace(/\s{2,}/g, ' '),$that);
        }
    });
    //End Speach
});

$(function () {
    function TemplateButton() {
        if (getCookie('template') != 'simple') {
            /**
             * Входим в режим сайта для слабовидящих
             * Проверяем что сейчас нормальная версия сайта
             */
            addCss('app_s.css');
            $('#simpletemplate .text').html('Обычная версия сайта');
            setCookie('template', 'simple', 7);
        }
        else {
            $("link[href='/css/app_s.css']").remove();
            $('#simpletemplate .text').html('Версия для слабовидящих');
            setCookie('template', 'normal', 7);
        }
    }

    function resetFontButtons() {
        $('.rightside abbr').removeClass('active');
    }

    function removeFontSize() {
        $("link[href='/css/template_fontplus.css']").remove();
        $("link[href='/css/template_fontminus.css']").remove();
    }

    function bindFontButtons() {
        $('.fontplus').click(FontPlus);
        $('.fontminus').click(FontMinus);
        $('.fontnormal').click(FontNormal);
    }

    function FontPlus() {
        bindFontButtons();
        resetFontButtons();
        removeFontSize();
        addCss('template_fontplus.css');
        setCookie('template_fontsize', 'plus', 7);
        $(this).addClass("active");
        $(this).unbind();
    }

    function FontNormal() {
        bindFontButtons();
        resetFontButtons();
        removeFontSize();
        setCookie('template_fontsize', 'normal', 7);
        $(this).addClass("active");
        $(this).unbind();
    }

    function FontMinus() {
        bindFontButtons();
        resetFontButtons();
        removeFontSize();
        setCookie('template_fontsize', 'minus', 7);
        addCss('template_fontminus.css');
        $(this).addClass("active");
        $(this).unbind();
    }

    bindFontButtons();

    $('#simpletemplate').click(TemplateButton);

    //Show login form
    $('#auth,#auth>*').click(function () {
        var $form = document.querySelector('.user-form');
        if ($form.dataset.vision == 1) {
            $($form).fadeIn();
        }
    });

    //Close button in login-form
    $(".back").click(function () {
        $('.user-form').fadeOut();
    });


    if (($(window).height() + 100) < $(document).height()) {
        $('#top-link-block').removeClass('hidden').affix({
            // how far to scroll down before link "slides" into view
            offset: {top: 100}
        });
    }

    var doclist = document.querySelectorAll(".link a");
    if (doclist != []) {
        var frame = document.querySelector('.docviewer');
        $(".closeview").click(function () {
            $(".viewdocs").removeClass('show');
        });
        doclist.forEach(function (item, i, doclist) {
            item.onclick = function () {

                /**
                 * Show load indicator, move spinner to href position
                 */
                var $y = $(item).offset().top-$('.staffarticle').offset().top+20;
                $('.loadindicator').fadeIn();
                $('.osahanloading').css('top',$y);

                frame.src = 'http://docs.google.com/gview?url=http://dxsh.ru' + item.getAttribute('href') + '&embedded=true';
                $(frame).load(function(){
                    $('.loadindicator').fadeOut();
                    $(".viewdocs").addClass('show');
                });
                return false;
            };
        });
    }

    var mapdiv = document.getElementById('map');

    function initialize() {
        $(mapdiv).height(400);
        var map = new google.maps.Map(mapdiv, {
            center: {lat: 46.3260, lng: 39.3958},
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.HYBRID
        });
        var image = {
            url: '/img/marker_s.png',
            size: new google.maps.Size(42, 42),
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 42)
        };

        var marker = new google.maps.Marker({
            position: {lat: 46.32642023, lng: 39.39567581},
            map: map,
            title: 'ДХШ Ленинградская',
        });
    }

    if (mapdiv)
        google.maps.event.addDomListener(window, 'load', initialize);

    if (getCookie('template') == 'simple') {
        addCss('app_s.css');
        $('#simpletemplate .text').html('Обычная версия сайта');
    }

    var fontsize = getCookie('template_fontsize');
    if (fontsize != "") {
        $('.font' + fontsize).click();
    } else
        $('.fontnormal').click();
});