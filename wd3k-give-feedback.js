jQuery().ready(function($) {
    $('#wd3k_feedback').stop().animate({'opacity':'0.5'});
    $('#wd3k_feedback').mouseover(function(){
       $('#wd3k_feedback').stop().animate({'opacity':'1'});
    });
    $('#wd3k_feedback').mouseleave(function(){
       $('#wd3k_feedback').stop().animate({'opacity':'0.5'});
    });
});