$(function(){
    $('.mobile-icon').on('click', function () {
        $('.mobile-menu-dropdown').toggle(300)
    })

    $(`.mobile-menu-dropdown ul li a`).on('click', function (){
        var ref = $(this).attr('ref')
        $(`#${ref}`).slideToggle()

    })
})