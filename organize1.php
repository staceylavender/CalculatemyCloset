<!--First page for users to design their database-->
<!--Here users will 'Turn On' their desired fields-->
<head>
    <title>Calculate My Closet</title>
<head>
<body>
    <h1 style="font-family:Futura; color:coral">Calculate My Closet</h1>
    <h2 style="font-family:Futura">Create Your Closet</h2>
    <p style="font-family:Futura; font-size:15px">Select the categories you want to use in your closet</p>

<script type="text/javascript"> //start Javascript code

function toggle(button) //create function called 'toggle' with parameter 'button'
{
  if(button.value=="OFF"){ //if button is off then turn it on
   button.value="ON";}

  else if(button.value=="ON"){ //if button is on then turn it off
  button.value="OFF";}
}
//end of javascript code
</script> 

<!--Buttons!-->
<form> 
<p><input type="button" id="type" value="OFF" onclick="toggle(this);"> Type (pant, shirt, etc.) </p>
<p><input type="button" id="color" value="OFF" onclick="toggle(this);"> Color</p>
<p><input type="button" id="pattern" value="OFF" onclick="toggle(this);"> Pattern</p>
<p><input type="button" id="size" value="OFF" onclick="toggle(this);"> Size</p>
<p><input type="button" id="fit" value="OFF" onclick="toggle(this);"> Fit</p>
<p><input type="button" id="price" value="OFF" onclick="toggle(this);"> Price</p>
<p><input type="button" id="rating" value="OFF" onclick="toggle(this);"> Rating</p>
<br>
<p><input type="button" value="Next" onclick="location.href='organize2.php'; return false"></p>
</form>
  
</body>