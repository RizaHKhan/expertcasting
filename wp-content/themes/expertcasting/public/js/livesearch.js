class Search{

    // describe and create/initiate our object
    constructor() {
        //give birth to object here
        
        this.openBtn = document.querySelector('.fa-search')
        this.searchBar = document.querySelector('.search')
        this.modal = document.querySelector('.modal-search')
        this.modalContent = document.querySelector('.modal-content')
        this.typingTimer
        this.isOverlayVisible = false
        this.previousValue
        this.events()
    }

    //Events
        events() {
            this.openBtn.addEventListener('click', this.openSearchbar.bind(this))
            document.addEventListener('keyup', this.keyPressDispatcher.bind(this))
            this.searchBar.addEventListener('keyup', this.typingLogic.bind(this))
        }   


    //Method

    //this opens and closes the input
    openSearchbar() {

        if(!this.isOverlayVisible) {
            this.modal.classList.remove('hide')
        this.isOverlayVisible = true
            this.searchBar.focus()
        } else {
            this.modal.classList.add('hide')
            this.isOverlayVisible = false                
        }
    }

    //adds the 'esc' key to the mix, allowing it to close the search bar
    keyPressDispatcher(e) {
        if(e.keyCode == 27) {
           if(!this.modal.classList.contains('hide')) {
               this.modal.classList.add('hide')
           }
        }
    }

    typingLogic() {

        if(this.searchBar.value !== this.previousValue) {
            clearTimeout(this.typingTimer)
        
            if(this.searchBar.value) {
        
                this.typingTimer = setTimeout(this.getResults.bind(this), 500)
            } else {
                this.modalContent.innerHTML = ''
            }
        }
       
        this.previousValue = this.searchBar.value
        
    }

    getResults() {

          
           
            fetch(livesearch_data.root_url + `/wp-json/wp/v2/pages?search=${this.searchBar.value}`)
            .then(response => response.json())
            .then(data => this.modalContent.innerHTML = `<div class="modal-inner">
                <h4 class="modal-title">Search Results:</h4>
                    ${data.length ? '<ol>' : '<p>No results found</p>'} 
                        ${data.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
                    ${data.length ? '</ol>' : ''}
                </div>`)
            .catch(err => console.log(err))
    }

}

let search = new Search()