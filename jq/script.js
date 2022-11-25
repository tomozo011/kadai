$(function() {
    $('#fadeOut').on('click', function() {
        $('.box').css('opacity', 0);
    });

    $('#fadeIn').on('click', function() {
        $('.box').css('opacity', 1);
    });

    $('#slideUp').on('click', function() {
        // $('.box').slideUp();
        $('.box').css('height', 0);
    });

    $('#slideDown').on('click', function() {
        // $('.box').slideDown();
        $('.box').css('height', 200);
    });
});