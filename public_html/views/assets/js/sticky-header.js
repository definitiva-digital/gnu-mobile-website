
window.onscroll = function()
{
    stickyheader()
}

var header = document.querySelector('#top-header')

var sticky = header.offsetTop;

function stickyheader(){
    if(window.pageYOffset > sticky){
        header.classList.add('header-sticky');
    }else{
        header.classList.remove('header-sticky')
    }
}