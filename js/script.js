new Vue({ 
    
    el: '#app',
    
    data : {
        home : true,
        about: false,
        menu: false,
        contact : false,
        isActiveHome: true,
        isActiveAbout: false,
        isActiveMenu: false,
        isActiveContact: false,
    },
    
    methods : {
        switchPage : function (page) {
             if (this.home) {
                    this.home = false,
                    this.isActiveHome = false;
                }
             if (this.about) {
                    this.about = false;
                    this.isActiveAbout = false;
                }
             if (this.menu) {
                     this.menu = false;
                     this.isActiveMenu = false;
                }
             if (this.contact) {
                     this.contact = false;
                     this.isActiveContact = false;
                }    
            switch (page) {
                case 'home':
                    this.home = true,
                    this.isActiveHome = true;
                    break;
                    
                case 'about':
                    this.about = true;
                    this.isActiveAbout = true;
                    break;
                    
                case 'menu':
                    this.menu = true;
                    this.isActiveMenu = true;
                    break;
                    
                case 'contact':
                    this.contact = true;
                    this.isActiveContact = true;
                    break;    
                
                }
            }
    }
    
});


function appelAjax(){
    $.getJSON("php/bdd_meat.php",afficheBDDMeat);
    $.getJSON("php/bdd_fish.php",afficheBDDFish);
    $.getJSON("php/bdd_vege.php",afficheBDDVege);
}

function afficheBDDMeat(menu){
    $("#targetMeat").empty();

    
    for(let i=0; i<menu.length; i++){
    
        $("#targetMeat").append("<li><i class=\"fas fa-star\"></i>" + menu[i]['name_meat'] + "</li>");

    }
}

function afficheBDDFish(menu){

    $("#targetFish").empty();

    
    for(let i=0; i<menu.length; i++){
    

        $("#targetFish").append("<li><i class=\"fas fa-star\"></i>" + menu[i]['name_fish'] + "</li>");

    }
}

function afficheBDDVege(menu){

    $("#targetVege").empty();
    
    for(let i=0; i<menu.length; i++){
    

        $("#targetVege").append("<li><i class=\"fas fa-star\"></i>" + menu[i]['name_vege'] + "</li>");
    }
}
window.onload = appelAjax, afficheBDDMeat, afficheBDDFish, afficheBDDVege;