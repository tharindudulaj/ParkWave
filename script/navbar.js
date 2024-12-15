let header = document.querySelector('.nav_header-menu');
let nLink = document.querySelectorAll('.nLink');

window.addEventListener('scroll', function(){
    if(this.window.scrollY > 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 1)";
        header.style.boxShadow = "2px 14px 10px -9px rgba(0,0,0,0.75)";
    }
    else if (this.window.scrollY < 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 0.5)";
        header.style.boxShadow = "none";
    }
})

