$(document).ready(function(){
    $('#contentAll,#tp1,#tp2,#hid1,#hid2').hide();
    $('#contentAll').fadeIn(3000);
    $('#r1').click(function(){
        $('#tp1').show();
        $('#r1').hide();
        $('#hid1').show();
        event.preventDefault();
        var targetOffset = $('#tp1').offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    })
    $('#hid1').click(function(){
        $('#tp1').hide();
        $('#r1').show();
        $('#hid1').hide();
        event.preventDefault();
        var targetOffset = $('#tp1').offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    })


    $('#r2').click(function(){
        $('#tp2').show();
        $('#r2').hide();
        $('#hid2').show();
        event.preventDefault();
        var targetOffset = $('#tp2').offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    })
    $('#hid2').click(function(){
        $('#tp2').hide();
        $('#r2').show();
        $('#hid2').hide();
        event.preventDefault();
        var targetOffset = $('#tp2').offset().top;
        $('html,body').animate({scrollTop: targetOffset}, 1000);
    })
})