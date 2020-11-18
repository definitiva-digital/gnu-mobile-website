$(function(){
    $('.contact-link').on('click', function(e){
        e.preventDefault();
        $("#contact-form-area").show(300).css('display', 'flex')
    })

    $('#contact-close').on('click', function(){
        $("#contact-form-area").hide(300)
    })
})