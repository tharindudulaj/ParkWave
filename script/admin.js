let tabLinks = document.querySelectorAll('.tab');
let tab1 = document.querySelector('.tab-1');
let tab2 = document.querySelector('.tab-2');
let tab3 = document.querySelector('.tab-3');

let secLinks = document.querySelectorAll('.sec');
let sec1 = document.querySelector('.sec-1');
let sec2 = document.querySelector('.sec-2');
let sec3 = document.querySelector('.sec-3');

tab1.addEventListener("click", function(){
    sec1.classList.add('active');
    sec2.classList.remove('active');
    sec3.classList.remove('active');
    tab1.classList.add('now');
    tab2.classList.remove('now');
    tab3.classList.remove('now');

});
tab2.addEventListener("click", function(){
    sec2.classList.add('active');
    sec1.classList.remove('active');
    sec3.classList.remove('active');
    tab2.classList.add('now');
    tab1.classList.remove('now');
    tab3.classList.remove('now');
});
tab3.addEventListener("click", function(){
    sec3.classList.add('active');
    sec1.classList.remove('active');
    sec2.classList.remove('active');
    tab3.classList.add('now');
    tab2.classList.remove('now');
    tab1.classList.remove('now');
});
