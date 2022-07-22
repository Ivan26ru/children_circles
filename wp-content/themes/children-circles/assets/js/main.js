console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function ($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery);//узнать версию JQuery

    $('.bcc_container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1270,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.rar_container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1270,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.bt_container').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1270,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.container_gratitude').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 1270,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.wpcf7').not('.pum .wpcf7').each(function () {
        // console.log($(this)[0]);
        $(this)[0].addEventListener('wpcf7invalid', function (event) {
            console.log('error cf7');
            PUM.open('114');
        }, false);
    })

    $('.block_map input[type="submit"], .bso_item_card, .bpsd_ic_block, .btn_find_out_more').bind('click', function (event) {
        event.preventDefault();//убираем стандартное поведение
        PUM.open('114');
    });

    function sticky_block(container_id,items_id, margin_top = 0) {
        // #container_id id контейнера относительно к которому надо прилепить
        Array.prototype.slice.call(document.querySelectorAll(items_id)).forEach(function (a) {  // селекторы блоков, которые будут фиксироваться. Может быть как один блок, так два и более
            var b = null, P = margin_top;
            window.addEventListener('scroll', Ascroll, false);
            document.body.addEventListener('scroll', Ascroll, false);

            function Ascroll() {
                if (b == null) {
                    var Sa = getComputedStyle(a, ''), s = '';
                    for (var i = 0; i < Sa.length; i++) {
                        if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                            s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                        }
                    }
                    b = document.createElement('div');
                    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                    a.insertBefore(b, a.firstChild);
                    var l = a.childNodes.length;
                    for (var i = 1; i < l; i++) {
                        b.appendChild(a.childNodes[1]);
                    }
                    a.style.height = b.getBoundingClientRect().height + 'px';
                    a.style.padding = '0';
                    a.style.border = '0';
                }
                var Ra = a.getBoundingClientRect(),
                    R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector(container_id).getBoundingClientRect().bottom + 0);
                if ((Ra.top - P) <= 0) {
                    if ((Ra.top - P) <= R) {
                        b.className = 'stop';
                        b.style.top = -R + 'px';
                        b.style.left = 0;
                    } else {
                        b.className = 'sticky';
                        b.style.top = P + 'px';
                        b.style.left = Ra.left + 'px';
                    }
                } else {
                    b.className = '';
                    b.style.top = '';
                    b.style.left = '';
                }
                window.addEventListener('resize', function () {
                    a.children[0].style.width = getComputedStyle(a, '').width;
                    b.style.left = (b.className == 'sticky' ? (a.getBoundingClientRect().left + 'px') : '0');
                }, false);
            }
        })
        console.log('sticky3');
    }

    sticky_block('#block_content','#sidebar_left_container,#sidebar_right_container', 80);
    sticky_block('#bltwu_block_2','#bltwu_form_wrap', 80);

    // var burgerMenu = document.getElementById('burger-menu');
    // var overlay = document.getElementById('my_mobile_menu');
    // burgerMenu.addEventListener('click', function () {
    //     this.classList.toggle("close");
    //     overlay.classList.toggle("overlay");
    // });

}); //конец ready