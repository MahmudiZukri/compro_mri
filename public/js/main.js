window.scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('.nav').addClass('newClass');
    } else {
       $('.nav').removeClass('newClass');
    }
});
