<!--First page for users to design their database-->
<!--Here users will 'Turn On' their desired fields-->
<?php include('header.php');
include 'functions.php';?>
    <h2 style="font-family:Futura; color:coral">Create Your Closet</h2>
    <p style="font-family:Futura; font-size:15px">Select the categories you want to use in your closet</p> 

<!--Buttons!-->
<form id="clothesform" method ="POST" action="organize2.php"> 
<p><input type="button" id="type" value="OFF" onclick="toggle(this);" /><input type="hidden" name="type" value="OFF"/> Type (pant, shirt, etc.) </p>
<p><input type="button" id="color" value="OFF" onclick="toggle(this);"/><input type="hidden" name="color" value="OFF"/> Color</p>
<p><input type="button" id="pattern" value="OFF" onclick="toggle(this);"/><input type="hidden" name="pattern" value="OFF"/> Pattern</p>
<p><input type="button" id="size" value="OFF" onclick="toggle(this);"/><input type="hidden" name="size" value="OFF"/> Size</p>
<p><input type="button" id="fit" value="OFF" onclick="toggle(this);"/><input type="hidden" name="fit" value="OFF"/> Fit</p>
<p><input type="button" id="price" value="OFF" onclick="toggle(this);"/><input type="hidden" name="price" value="OFF"/> Price</p>
<p><input type="button" id="rating" value="OFF" onclick="toggle(this);"/><input type="hidden" name="rating" value="OFF"/> Rating</p>
<br>
<p><input type="submit" value="Next"></p>
</form>

<script type="text/javascript"> //start Javascript code

function toggle(button) //create function called 'toggle' with parameter 'button'
{
  if(button.value=="OFF"){ //if button is off then turn it on
   button.value="ON";
   $('input[name="'+ $(button).attr('id') + '"]').val("ON"); //search for input that has the attr 'name' with the same 'id' as the button selected and then change value to ON
 }

  else if(button.value=="ON"){ //if button is on then turn it off
  button.value="OFF";
  $('input[name="'+ $(button).attr('id') + '"]').val("OFF"); //search for input that has the attr 'name' with the same 'id' as the button selected and then change value to OFF
  }
}

//end of javascript code
</script>
  
</body>