(function ($) {
    'use strict';

    var controller;

    //set windows height to each scene
    function setSceneHeight() {
        $('.windows-height').not('.quiz').each(function() {
            var height = Math.max($(window).height(), $(this).height());
            $(this).outerHeight(height);
            $(this).css('line-height', height + 'px');
        });
        $('.windows-height.quiz').each(function() {
            var height = Math.max($(window).height(), 500);
            $(this).height(height);
            $(this).css('line-height', height + 'px');
        });
    }

    $(document).ready(function($) {

       $( window ).konami({
            cheat: function() {
                $('body').append('<div class="konami"><iframe width="420" height="315" src="https://www.youtube.com/embed/PJQVlVHsFF8" frameborder="0" allowfullscreen></iframe></div>');
            }
        });

        var imgLoad = imagesLoaded( 'body' );

        imgLoad.on( 'always', function( instance ) {

            setSceneHeight();
            // init controller
            controller = new ScrollMagic.Controller();

            //overide scrollTo function
            controller.scrollTo(function (target) {
              TweenMax.to(window, 0.5, {
                scrollTo : {
                  y : target, // scroll position of the target along y axis
                  autoKill : true // allows user to kill scroll action smoothly
                },
                ease : Cubic.easeInOut
              });
            });

            //  Bind scroll to anchor links
            $(document).on("click", "a[href^=#]", function(e) {
                var id = $(this).attr("href");
                if($(id).length > 0) {
                    e.preventDefault();
                    // trigger scroll
                    controller.scrollTo(id);
                    // If supported by the browser we can also update the URL
                    if (window.history && window.history.pushState) {
                      history.pushState("", document.title, id);
                    }
                }
            });

            // HEADER
            var timeline = new TimelineMax()
            .add(TweenMax.fromTo($('#header-scene-1').find('.fl'), 1, { css : { left : -$(window).width() / 2}}, { css : { left : 0}}))
            .add(TweenMax.fromTo( $('#header-scene-1').find('.fr'), 1, { css : { right : -$(window).width() / 2}}, { css : { right : 0}}));

            var scene = new ScrollMagic.Scene({ triggerElement: '#header-scene-1'})
                            .setTween(timeline)
                            .setClassToggle('#header-scene-1', "active")
                            .addTo(controller)
                            .addIndicators();
            // END-HEADER
        }); 

        $('#confirm').submit(function (evt) {
            evt.preventDefault();
            var inputData = {};
            inputData['code'] = $(this).find('#confirm-code').val();
            var that = $(this);
            $.ajax('main.php', {
                type: 'POST',
                data: inputData
            }).done(function(data) {
                if(data !== '') {
                    $('#main').html(data);
                    ajaxLoad();
                    $(document).trigger('ajaxLoad');
                    controller.scrollTo('main');
                } else {
                  $('#main').html('');
                  $(that).find('.error').show();
                }
            });
        });
    });

    function ajaxLoad() {
        //set height to nav element
        setSceneHeight();
        // initQuiz Slider
        //  Bind scroll to anchor links
        $('#main').on("click", "a[href^=#]", function(e) {
            if($(this).parents('.quiz').length > 0) {
                return false;   
            }
            var id = $(this).attr("href");
            if($(id).length > 0) {
                e.preventDefault();
                // trigger scroll
                controller.scrollTo(id);
                // If supported by the browser we can also update the URL
                if (window.history && window.history.pushState) {
                    history.pushState("", document.title, id);
                }
            }
        });
        $('.nav li').height($(window).height() / ($('.nav li').length + 1));

        // Animate right nav
        var pinNav = new ScrollMagic.Scene({ triggerElement: '.scene-wrapper', triggerHook: 0, duration: $('.scene-wrapper').height() - $('.scene-wrapper').find('.scene').last().height() })
                        .setPin('.nav')
                        .addTo(controller);

        var animateNav = new ScrollMagic.Scene({ triggerElement: '.scene-wrapper', triggerHook: 0})
                        .setTween(TweenMax.to( '.nav .content-wrapper', 0.5, {css : {right : 0, opacity : 1 }} ))
                        .addTo(controller);

        var animateNavBack = new ScrollMagic.Scene({ triggerElement: '.scene-wrapper', triggerHook: 0.5, offset: $('.scene-wrapper').height()})
                        .setTween(TweenMax.to( '.nav .content-wrapper', 0.5, {css : {right : -120, opacity : 0 }} ))
                        .addTo(controller);
        //-------------------

        $('.scene').each(function() {
            var trigger = $(this).find('.trigger');
            

            // try to find a linked link

            var scene = new ScrollMagic.Scene({ triggerElement: trigger.get(), duration: Math.floor($(this).height()) })
                        .setClassToggle('#background-' + $(this).attr('id'), "active")
                        .addTo(controller);

            var link = $('.nav a[href^=#' + $(this).attr('id') + ']');
            if(link.length > 0) {
                var sceneLink = new ScrollMagic.Scene({ triggerElement: trigger.get() })
                        .setClassToggle(link.parent('li').get(), "active")
                        .addTo(controller);
            }

            var text = $(this).find('.text');
            var animateProperty = text.data('animate-property');
            var animateFrom = '';
            var animateTo = '';

            if (text.data('animate-property') == 'left') {
                animateFrom = { css : { left : - text.width() - 200 }, ease: Back.easeOut};
                animateTo = { css : { left : 0 , opacity: 1}, ease: Back.easeOut};
            }
            else if (text.data('animate-property') == 'right') {
                animateFrom = { css : { right : - $(this).width() - 200 }, ease: Back.easeOut };
                animateTo = { css : { right : text.outerWidth() - $(this).width(), opacity: 1}, ease: Back.easeOut };
            }

            var timeline = new TimelineMax()
                .add(TweenMax.fromTo( text, 1, animateFrom, animateTo ));

            var scene_text = new ScrollMagic.Scene({ triggerElement: trigger.get(), offset: 100 })
                        .setTween(timeline)
                        .addTo(controller);
        });
    }
}(jQuery));