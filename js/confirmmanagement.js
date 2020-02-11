class ConfirmManagement {
    constructor(divId,buttonNoId,buttonDeleteClass){
        this.div = document.getElementById(divId);
        this.buttonsDelete = document.getElementsByClassName(buttonDeleteClass);
        this.buttonNo = document.getElementById(buttonNoId);
        this.href = document.getElementById("actionLink").href;
        this.link = document.getElementById("actionLink");
        this.events();

    }

    events(){
        this.buttonNo.addEventListener("click",function(){
            this.div.style.display = "none";
        }.bind(this));

        for (let i=0; i < this.buttonsDelete.length; i++ ){
            let commentID = this.buttonsDelete[i].id;
            this.buttonsDelete[i].addEventListener("click",function(){
                    this.div.style.display = "flex";
                    this.link.href = this.href + commentID;
            }.bind(this));
        }
    }
}