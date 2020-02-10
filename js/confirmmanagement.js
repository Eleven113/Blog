class ConfirmManagement {
    constructor(divId,buttonNoId,buttonDeleteClass){
        this.div = document.getElementById(divId);
        this.buttonsDelete = document.getElementsByClassName(buttonDeleteClass);
        this.buttonNo = document.getElementById(buttonNoId);
        console.log(this.buttonsDelete);
        this.events();
    }

    events(){
        this.buttonNo.addEventListener("click",function(){
            this.div.style.display = "none";
        }.bind(this));

        for (let i=0; i < this.buttonsDelete.length; i++ ){
            this.buttonsDelete[i].addEventListener("click",function(){
                    this.div.style.display = "flex";
            }.bind(this));
        }
    }
}