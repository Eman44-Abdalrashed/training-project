$(function() {
    'use strict';
    $('.username').blur(function() {
        if ($(this).val().length < 3) {
            $(this).css('border', '2px solid #f00');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeIn(200);

        } else {
            $(this).css('border', '2px solid #080');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeOut(200);
        }
    });
    $('.name').blur(function() {
        if ($(this).val().length < 3) {
            $(this).css('border', '1px solid #f00');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeIn(200);

        } else {
            $(this).css('border', '1px solid #080');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeOut(200);
        }
    });
    $('.email').blur(function() {
        if ($(this).val().length < 10) {
            $(this).css('border', '2px solid #f00');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeIn(200);

        } else {
            $(this).css('border', '2px solid #080');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeOut(200);
        }
    });
    $('.password').blur(function() {
        if ($(this).val().length < 5) {
            $(this).css('border', '2px solid #f00');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeIn(100);

        } else {
            $(this).css('border', '2px solid #080');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeOut(100);
        }
    });
    $('.repassword').blur(function() {
        if ($(this).val().length != $('.password').val().length) {
            $(this).css('border', '2px solid #f00');
            $(this).css("borderRadius", "5px");

            $(this).parent().find('.custom-alert ').fadeIn(100);

        } else {
            $(this).css('border', '2px solid #080');
            $(this).css("borderRadius", "5px");
            $(this).parent().find('.custom-alert ').fadeOut(100);
        }
    });

});