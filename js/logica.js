$(document).ready(function(){
// codigo del backstrecht del index
	$(".body-index").backstretch([
			"images/page.jpg"
			],{
				fade:750,
				duration:5000
			});

// codigo del slider del index 
var mySwiper = new Swiper ('.swiper-container',{
    direction: 'horizontal',
    loop: true,
    pagination: '.swiper-pagination',
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    scrollbar: '.swiper-scrollbar',
    autoplay:3000,
  })

 $('.flexslider').flexslider({
    animation: "slide",
    itemWidth: 300,
    itemMargin: 5,
    itemHeight:300,
    controlNav: "thumbnails",
    loop:true
  });

  $(window).scroll(function(){
    var scroll = $(this).scrollTop();
    if(scroll>120){
        $("#box-title-one").addClass("fix-title");
    }else{
        $("#box-title-one").removeClass("fix-title");
    }
  });

  // codigo modal articulos
  $(".sp_read").click(function() {
        $(".fix-title").fadeOut("fast");
      var texto = $(this).attr("id");
      $(".sec-model").fadeIn("fast");
      if(texto=="text1"){
            $(".arti_modal").fadeOut("fast");
            $("#arti1").fadeIn("fast");
      }
      else if(texto=="text2"){
             $(".arti_modal").fadeOut("fast");
            $("#arti2").fadeIn("fast");
      }
      else if(texto=="text3"){
             $(".arti_modal").fadeOut("fast");
            $("#arti3").fadeIn("fast");
      }
      else if(texto=="text4"){
             $(".arti_modal").fadeOut("fast");
            $("#arti4").fadeIn("fast");
      }
  });

  $(".cerrar_modal").click(function(){
    $(".sec-model").fadeOut("fast");
    $(".fix-title").fadeIn("fast");

  })
})

