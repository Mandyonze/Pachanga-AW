$(document).ready(function(){

  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if (scroll > 100) {

      if (!flag){
        $("#nav").css({"background-color" : "orange"});
        flag = true;
      }

    } else {
      if (flag) {
        $("#nav").css({"background-color" : "transparent"});
        flag = false;
      }

    }

  });

});
