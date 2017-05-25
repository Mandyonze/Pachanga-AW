/***************************************************************************************************************************
  Inicio
****************************************************************************************************************************/
/***************************************************************************************************************************
  Change the burguer menu and data picker.
****************************************************************************************************************************/


$(function () {
  $("#datepicker").datepicker({
        autoclose: true,
        todayHighlight: true
  }).datepicker('update', new Date());;
});
//
// $(document).ready(function(){



//   var flag = false;
//   var scroll;
//   var width;
//   width = $(window).width();
//
//
//
// $(window).resize(function() {
//   width = $(window).width();
//
//     if (width < 992) {
//         $(".burguer-menu").css({"display" : "block"});
//     } else {
//         $(".burguer-menu").css({"display" : "none"});
//     }
// });
//
//
// if (width < 992) {
//     $(".burguer-menu").css({"display" : "block"});
// } else {
//     $(".burguer-menu").css({"display" : "none"});
// }



  // $(window).scroll(function(){
  //   scroll = $(window).scrollTop();
  //
  //   if (scroll > 530 || width < 992) {
  //
  //     if (!flag){
  //       $(".burguer-menu").css({"display" : "block"});
  //       flag = true;
  //     }
  //
  //   } else {
  //     if (flag) {
  //       $(".burguer-menu").css({"display" : "none"});
  //       flag = false;
  //     }
  //
  //   }
  //
  // });

// });
