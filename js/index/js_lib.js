/*===============================================================================================================	
Author     : Muhammad Febriansyah
Date       : Mei 2016
 =============================================================================================================== */

 $.fn.generate_height = function () {
  var maxHeight = -1;
  $(this).each(function () {
    $(this).children().each(function () {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });

    $(this).children().each(function () {
      $(this).height(maxHeight);
    });
  })
}