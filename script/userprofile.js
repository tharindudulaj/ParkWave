let tab1 = document.querySelector(".tab-1");
let tab2 = document.querySelector(".tab-2");
let tab3 = document.querySelector(".tab-3");
let tab4 = document.querySelector(".tab-4");
let tab5 = document.querySelector(".tab-5");

let sec1 = document.querySelector(".sec-1");
let sec2 = document.querySelector(".sec-2");
let sec3 = document.querySelector(".sec-3");
let sec4 = document.querySelector(".sec-4");
let sec5 = document.querySelector(".sec-5");

tab1.addEventListener("click", function(){
    sec1.classList.add("active");
    sec2.classList.remove("active");
    sec3.classList.remove("active");
    sec4.classList.remove("active");
    sec5.classList.remove("active");
    tab1.classList.add("active")
    tab2.classList.remove("active");
    tab3.classList.remove("active");
    tab4.classList.remove("active");
    tab5.classList.remove("active");
})
tab2.addEventListener("click", function(){
    sec2.classList.add("active");
    sec1.classList.remove("active");
    sec3.classList.remove("active");
    sec4.classList.remove("active");
    sec5.classList.remove("active");
    tab2.classList.add("active")
    tab1.classList.remove("active");
    tab3.classList.remove("active");
    tab4.classList.remove("active");
    tab5.classList.remove("active");
})
tab3.addEventListener("click", function(){
    sec3.classList.add("active");
    sec1.classList.remove("active");
    sec2.classList.remove("active");
    sec4.classList.remove("active");
    sec5.classList.remove("active");
    tab3.classList.add("active")
    tab1.classList.remove("active");
    tab2.classList.remove("active");
    tab4.classList.remove("active");
    tab5.classList.remove("active");
})
tab4.addEventListener("click", function(){
    sec4.classList.add("active");
    sec2.classList.remove("active");
    sec3.classList.remove("active");
    sec1.classList.remove("active");
    sec5.classList.remove("active");
    tab4.classList.add("active")
    tab1.classList.remove("active");
    tab2.classList.remove("active");
    tab3.classList.remove("active");
    tab5.classList.remove("active");
})
tab5.addEventListener("click", function(){
    sec5.classList.add("active");
    sec2.classList.remove("active");
    sec3.classList.remove("active");
    sec4.classList.remove("active");
    sec1.classList.remove("active");
    tab5.classList.add("active")
    tab1.classList.remove("active");
    tab2.classList.remove("active");
    tab4.classList.remove("active");
    tab3.classList.remove("active");
})