/***************************************************************************************************************************
  Index
****************************************************************************************************************************/
/***************************************************************************************************************************
  Change the nav in orange when do scroll.
****************************************************************************************************************************/


$(function () {
  $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
  }).datepicker('update', new Date());;
});

$(document).ready(function(){



  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if (scroll > 530) {

      if (!flag){
        $(".burguer-menu").css({"display" : "block"});
        flag = true;
      }

    } else {
      if (flag) {
        $(".burguer-menu").css({"display" : "none"});
        flag = false;
      }

    }

  });

});
