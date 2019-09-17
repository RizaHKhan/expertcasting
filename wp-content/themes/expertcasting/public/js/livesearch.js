class Search{

    // describe and create/initiate our object
    constructor() {
        //give birth to object here
        this.openBtn = document.querySelector('.fa-search')
        this.searchBar = document.querySelector('.search')
        this.typingTimer
        this.events()
    }

    //Events
        events() {
            this.openBtn.addEventListener('click', this.openSearchbar.bind(this))
            document.addEventListener('keyup', this.keyPressDispatcher.bind(this))
            this.searchBar.addEventListener('keydown', this.typingLogic.bind(this))
        }   


    //Method

    openSearchbar() {
        if(!this.searchBar.classList.contains('delete')) {
            this.searchBar.classList.add('delete') 
            this.searchBar.value = ''     
        } else {
             this.searchBar.classList.remove('delete')
             this.searchBar.focus()
         }
    }

    keyPressDispatcher(e) {
        //83 for s
        //27 for esc
        if(e.keyCode == 83) {
            if(this.searchBar.classList.contains('delete')) {
                this.searchBar.classList.remove('delete')
                this.searchBar.focus()
            } 
        }

        if(e.keyCode == 27) {
           if(!this.searchBar.classList.contains('delete')) {
               this.searchBar.classList.add('delete')
               this.searchBar.value = ''
           }
        }
    }


    typingLogic() {
        
        clearTimeout(this.typingTimer)
        
        
        this.typingTimer = setTimeout(() => {
             console.log('this is a timeout test')
        }, 2000);
    }
}

let search = new Search()