(function ($) {
    'use strict';
    
    function initQuiz() {
        // Init quiz result;
        var result = 0;
        var nbQuestion = $('.quiz').find('.question').length;

        var valideMsg = ['Oui, je dis oui !', 'Well done, mate !', 'Exact !', 'Yes !'];
        var errorMsg = ['Rohh', 'Raté :(', 'Presque !', 'Non, mais non...', 'Alalala'];

        var mySwiper = $('.quiz').find('.swiper-container').swiper({
            mode:'horizontal',
            followFinger: false,
            longSwipes: false,
            shortSwipes: false,
            onInit: function (swiper) {
                $('.quiz').find('.swipe-next').on('click', function (e) {
                    console.log('next');
                    console.log(swiper);
                    e.preventDefault();
                    swiper.slideNext();
                });
                $('.quiz').find('.swipe-first').on('click touch', function (e) {
                    e.preventDefault();
                    swiper.slideTo(0);
                    result = 0;
                    $('.quiz').find('.msg').remove();
                    $('.quiz').find('.answer').css('visibility', 'hidden');
                    $('.quiz').find('input[type=radio]').attr('checked','');
                    $('input').attr('disabled', false);
                });
            },
            onSlideChange: function (swiper) {
                console.log('test');
            }
        });


        $('.quiz').find('.answer').css('visibility', 'hidden');
        $('.quiz').find('.question input').on('change', function() {
            $(this).parents('.question').next('.answer').css('visibility', 'visible');
            $('input[name='+$(this).attr('name')+']').attr('disabled', true);
            if($(this).val() == 1) {
                $(this).parents('.question').next('.answer').prepend('<p class="msg valid">'+valideMsg[Math.floor(Math.random() * valideMsg.length)]+'</p>');
                result++;
            } else {
                $(this).parents('.question').next('.answer').prepend('<p class="msg error">'+errorMsg[Math.floor(Math.random() * errorMsg.length)]+'</p>');
            }
        });

        $('.quiz').find('.show-result').on('click touch', function (e) {
            e.preventDefault();
            $('.quiz').find('.result .note').hide();

            $('.quiz').find('.score').html(result + '/' + nbQuestion);
            if(result < 5) {
                $('.quiz').find('.result .less-than-5').show();
            } else if(result < 8) {
                $('.quiz').find('.result .between-5-and-7').show();
            } else {
                $('.quiz').find('.result .between-8-and-10').show();
            }
        })
    }
    $(document).on('ajaxLoad', initQuiz);
}(jQuery));