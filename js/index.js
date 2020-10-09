window.onscroll = function() {scrollFunction()};
    
function scrollFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
    // document.getElementById("header").style.backgroundColor = "whitesmoke";
    document.getElementById("header").style.boxShadow = "1px 1px 6px rgb(238, 238, 238)";
  } else {
    // document.getElementById("header").style.backgroundColor = "rgba(255, 255, 255, 0.363)";
    document.getElementById("header").style.boxShadow = "none";
 
  }
}



// ////////

    $(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});




function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


//
  function openm(){
x = document.getElementById('models');
  x.style.display="block";
}
function closem(){
  x = document.getElementById('models');
  x.style.display="none";
}
function openm_l(){
  x = document.getElementById('model_login');
      x.style.display="block";
  
  }
  
function closem_l(){
  x = document.getElementById('model_login');
  x.style.display="none";

}


// testimonial
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");

  if (n > slides.length) {
         slideIndex = 1;
        
  }    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}