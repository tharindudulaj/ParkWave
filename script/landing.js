let scrollContainer = document.querySelector(".gallery");
let backbtn = document.getElementById("backbtn");
let nextbtn = document.getElementById("nextbtn");

backbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft -= 600;
});
nextbtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 600;
});


const bgImg = document.getElementById("bg-img");
const imgs = ["./assets/backgroundmain.jpg", "./assets/back2.jpg", "./assets/back3.jpg", "./assets/back4.jpg", "./assets/back5.jpg", "./assets/back6.jpg", "./assets/back7.jpg"];
let i = 0;

function imgSlider() {
    bgImg.style.backgroundImage = `url(${imgs[i]})`;
    if (i < imgs.length - 1){
        i++;
    }
    else{
        i = 0;
    }
    setTimeout(imgSlider, 3000);
}
window.onload = imgSlider();


let header = document.querySelector('.nav_header-menu');
let nLink = document.querySelectorAll('.nLink');

window.addEventListener('scroll', function(){
    if(this.window.scrollY > 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 1)";
        header.style.boxShadow = "1px 7px 13px 0px rgba(0,0,0,0.75)";
    }
    else if (this.window.scrollY < 100){
        header.style.backgroundColor = "rgba(39, 41, 42, 0.5)";
        header.style.boxShadow = "none";
    }
})