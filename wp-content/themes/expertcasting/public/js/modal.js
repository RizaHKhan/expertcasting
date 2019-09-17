const modal = document.querySelector('.modal-container')
const images  = document.querySelectorAll('img')

for(const image of images) {
    image.addEventListener('click', (e) => {

        modal.classList.remove('hide')

        modal.innerHTML = `
            <div class="modal-focus"><img src=${e.target.src}></div>
        `
    })
}

modal.addEventListener('click', (e) => {
    modal.classList.add('hide')

    const modalFocus = document.querySelector('.modal-focus')
    modalFocus.classList.add('hide')
    
})