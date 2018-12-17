/*===============================================================================================================	
Author     : Muhammad Febriansyah
Date       : November 2016
 =============================================================================================================== */
$(document).ready(function() {
	$('.owl-carousel').owlCarousel({
    items:1,
    autoplay:true,
    autoplayTimeout:4000,
    loop:true
  });
  if ($(window).width() < 767) {
   $('.sliderFlip').owlCarousel({
      items:1,
      stagePadding: 60,
      margin:20
    });
  }
  $('.unggulanSLider').owlCarousel({
    items:1,
    loop:true,
    autoplay:false,
    autoplayTimeout:4000,
    nav:true,
    navText: ["<img src='"+ url_asset +"/img/index/arrow-left.png'>","<img src='"+ url_asset +"/img/index/arrow-right.png'>"]
    //URLhashListener:true,
    //startPosition: 'URLHash'
  });

  $("a.scrolling").click(function(e) {
    e.preventDefault();
    var divID = $(this).attr("href");
    //console.log(divID);
      $('html, body').animate({
          scrollTop: $(divID).offset().top
      }, 2000);
  });

	$('.trigger_card').click(function(){
		//var arParent = $(this).closest('article_card');
		//console.log(arParent);
	  	$(this).closest('.article_card').toggleClass('flipped');
	});
  $("#triggerVisit").click(function (e) { 
      e.stopPropagation(); 
      $(".popup_menu").show();
      $("body").addClass("overflowHidden");
  });
  $(document).click(function () { // you don't need the else part to fadeout
      var $el = $(".popup_menu");
      if ($el.is(":visible")) {
          $el.fadeOut(200);
          $("body").removeClass("overflowHidden");
      }
   });
  $("#close_trigger").click(function(){
     var $el = $(".popup_menu");
      if ($el.is(":visible")) {
          $el.fadeOut(200);
          $("body").removeClass("overflowHidden");
      }
  });
	
});


$(window).scroll(function(){
	if($(window).scrollTop()<=20){
		$('#mainHeader').removeClass('fixNav');
	}else{
		$('#mainHeader').addClass('fixNav');
	}
});
