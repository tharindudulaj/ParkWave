 let heroBg = document.getElementById('hero-bg');

 const imgArray = [
    {
        img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(./assets/homeback2.jpg)",
    },
    {
        img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(./assets/homeback3.jpg)",
    },
    {
        img: "linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(./assets/homeback4.jpg)"
    },
 ]
 let currentSlide = 0;

 function slideMove() {
    let item = imgArray[currentSlide];
    if(currentSlide === 2) {
        currentSlide = 0;
    }else {
        currentSlide++;
    }
    heroBg.style.backgroundImage = item.img;
 }
 let slider;
 slider = setInterval(slideMove, 4000);