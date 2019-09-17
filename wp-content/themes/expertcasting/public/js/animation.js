
const up = document.querySelector('.return')



window.onscroll = function() {
    
    if(window.pageYOffset > 400) {
        up.style.opacity = '1'
    } else {
        up.style.opacity = '0'
    }
}
