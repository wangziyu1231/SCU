 $(function(){
      $(window).scroll(function () {
      var ref_min = $("#floatdiv")[0]
	  if (!ref_min) return;
      var scroll_top = $(window).scrollTop();
/*    var ref_height_min = ref_min.offsetTop+ref_min.offsetHeight;
*/    if (scroll_top >124) {
           $("#floatdiv").addClass("canfloat");
      } else {
           $("#floatdiv").removeClass("canfloat");
      }
      });
});