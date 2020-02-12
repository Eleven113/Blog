class NoticeManagement {
    constructor (divId,divCloseId){
        this.div = document.getElementById(divId);
        this.divClose = document.getElementById(divCloseId);
        this.event();
        this.timer();
    }

    closeDiv(){
        this.div.style.display = "none"
    }

    event(){
        this.divClose.addEventListener("click", this.closeDiv.bind(this));
    }

    timer(){
        setInterval(this.closeDiv.bind(this),5000);
    }

}