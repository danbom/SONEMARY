
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slide-image");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  if(slideIndex>1)  x[slideIndex-1].style.display = "block";
}

// 메인페이지 상단 프리뷰 - 자동 슬라이드
var previewIndex = 0;
carousel();

function carousel(){
  var i;
  var x = document.getElementsByClassName("slide-image");
  for(i=0; i<x.length; i++){
    x[i].style.display = "none";
  }
  previewIndex++;
  if(previewIndex > x.length){
    previewIndex = 1;
  }

  if(previewIndex>=1)  x[previewIndex-1].style.display = "block";

  setTimeout(carousel, 2000);   // change image every 2seconds
}
