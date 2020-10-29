$(function(){
    $('.accordion-init').on('click', function(){
        let contentTarget = $(this).attr('data-set')
        let content = $(`#${contentTarget}`)
        content.slideToggle(200)
    })
})