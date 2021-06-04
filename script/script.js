const navSlide = () => {
    const burger = document.querySelector ('.burger');
    const nav = document.querySelector ('.liens');
    const navLiens = document.querySelectorAll ('.liens li');

    burger.addEventListener('click',()=>{

        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animations
        navLiens.forEach((liens, index) => {
            if(liens.style.animation){
                //pour que l'animation se lance a chaque click sur le menu burger
                liens.style.animation = ''
            }else{
                liens.style.animation = `navLiensFade 0.5s ease forwards ${index / 7 + 0.6}s`;
            }
        });
    });
}

navSlide();

//passer le site en dark mode
function dm(){
    var dark = document.body;
    dark.classList.toggle("dark_mode");
    alert('You just changed mode');
}

function gly(){
    var glly = document.getElementById("galerieJeux");
    var glly2 = document.getElementById("galerieJeux2");
    var glly3 = document.getElementById("galerieJeux3");
    var glly4 = document.getElementById("galerieJeux4");
    var glly5 = document.getElementById("galerieJeux5");
    var glly6 = document.getElementById("galerieJeux6");
    var glly7 = document.getElementById("galerieJeux7");
    var glly8 = document.getElementById("galerieJeux8");
    var glly9 = document.getElementById("galerieJeux9");
    var glly10 = document.getElementById("galerieJeux10");
    var glly11 = document.getElementById("galerieJeux11");
    var glly12 = document.getElementById("galerieJeux12");
    var glly13 = document.getElementById("galerieJeux13");
    var glly14 = document.getElementById("galerieJeux14");
    var glly15 = document.getElementById("galerieJeux15");
    var glly16 = document.getElementById("galerieJeux16");
    var glly17 = document.getElementById("galerieJeux17");
    var glly18 = document.getElementById("galerieJeux18");
    var glly19 = document.getElementById("galerieJeux19");

    glly.classList.toggle("normal");
    glly2.classList.toggle("normal");
    glly3.classList.toggle("normal");
    glly4.classList.toggle("normal");
    glly5.classList.toggle("normal");
    glly6.classList.toggle("normal");
    glly7.classList.toggle("normal");
    glly8.classList.toggle("normal");
    glly9.classList.toggle("normal");
    glly10.classList.toggle("normal");
    glly11.classList.toggle("normal");
    glly12.classList.toggle("normal");
    glly13.classList.toggle("normal");
    glly14.classList.toggle("normal");
    glly15.classList.toggle("normal");
    glly16.classList.toggle("normal");
    glly17.classList.toggle("normal");
    glly18.classList.toggle("normal");
    glly19.classList.toggle("normal");
}