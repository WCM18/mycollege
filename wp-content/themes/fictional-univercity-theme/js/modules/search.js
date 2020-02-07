import $ from 'jquery';
class Search{
    //constructor
    constructor(){
        this.openButton()=$(".js-search-trigger");
        this.closeButton=$(".search-overlay__close");
        this.overlay=$(".search-overlay");
        this.events();
    }
    //2.events
    events(){
        this.openButton.on("click",this.openOverlay.bind(this));
        this.closeButton.on("click",this.closeOverlay.bind(this));

    }

    //3.method
    openOverlay(){

        this.searchOverlay.addClass("search-overlay--active");
        this.searchOverlay.removeClass("search-overlay--active");
    }
    closeOverlay(){

    }
}
export default Search;