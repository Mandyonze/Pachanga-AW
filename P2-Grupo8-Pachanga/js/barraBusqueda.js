
 function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }


$( "#input-gr" ).load(function() {
  $('.input-group').css("float", "");
});

function removeFloat(object)
{
	alert("Hello! I am an alert box!");
	$('.input-group').css("float", "");
	object.css('float', '')
}