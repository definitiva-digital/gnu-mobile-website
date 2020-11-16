$(function(){
    let $doc = $('html, body');
    $('.soft-achor').click(function(e) {
        e.preventDefault()

        let completeUrl = window.location.href.split("#");
        let local = completeUrl[0]
        let anchor = $.attr(this, 'href')
        let home = $('#home-link').attr('href') + "/"

        console.log(anchor)
        if(home === local){
            $doc.animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        }

        window.location.href = home  + anchor;

    });
})