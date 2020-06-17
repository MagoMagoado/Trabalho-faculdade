var slideIndex = 1;
contadorDivs(slideIndex);

function botoes_F_T(n) {
  contadorDivs(slideIndex += n);
}

function interadores(n) {
  contadorDivs(slideIndex = n);
}

function contadorDivs(n) {
  var i;
  var x = document.getElementsByClassName("sliders");
  var dots = document.getElementsByClassName("saida");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}