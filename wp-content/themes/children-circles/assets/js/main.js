console.log('скрипт подключен'); //проверка подключения скрипта
jQuery(document).ready(function($) { //ожидание полной загрузки дом дерева и возвожность работы со знаком доллара, в движках
    console.log($); //проверка работоспособности JQuery
    console.log(jQuery.fn.jquery);//узнать версию JQuery

    $('.bcc_container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $('.rar_container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
    });

    $('.bt_container').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
    });

    $('.wpcf7').not('.pum .wpcf7').each(function (){
        console.log($(this)[0]);
        $(this)[0].addEventListener( 'wpcf7invalid', function( event ) {
            console.log('error cf7');
            PUM.open('114');
        }, false );
    })

}); //конец ready