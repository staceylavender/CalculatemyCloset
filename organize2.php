<!--This is the second page for users to design their database-->
<!--Here users will select the values for their database-->
<!--Values selected here will appear in drop down select lists on organize3 page.--> 
<head>
    <title>Calculate My Closet</title>
<head>
<body>
    <h1 style="font-family:Futura; color:coral">Calculate My Closet</h1>
    <h2 style="font-family:Futura">Organize Your Closet</h2>
    
    <!-- CSS STUFF -->
    <style type="text/css">
    #wrap {
        width:800px;
        margin:0 auto; 
        }
        
    .left_col {
        float:left;
        width:400px; 
        height: 160px;
        }
        
    .right_col {
        float:right;
        width:400px; 
        height: 160px;
        }
        
    .buttonClicked {  /* class for clicked buttons*/
        background:coral;
       } 
    </style>
    <!-- END OF CSS STUFF -->


    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Types of Clothing</p>
            <p>Select the Types of clothes in your closet</p>
            <input type="button" name="type" value="Jeans" onclick="changeColor(this)" />
            <input type="button" name="type" value="Pants" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Shorts" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Skirt" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Dress" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Tshirt" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Shirt" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Blouse" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Coat" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Jacket" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Athletic Top" onclick="changeColor(this)"/>
            <input type="button" name="type" value="Athletic Bottom" onclick="changeColor(this)"/>
        </div>
    </div>

    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Price Range</p>
            <p>Select Price Ranges</p>
            <input type="button" name="price" value="$10 or less"onclick="changeColor(this)"/>
            <input type="button" name="price" value="$11-$15" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$16-$20" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$21-$30" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$31-$40" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$41-$50" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$51-$60" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$61-$70" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$71-$80" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$81-$100" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$100-$150" onclick="changeColor(this)"/>
            <input type="button" name="price" value="$150-$200" onclick="changeColor(this)"/>
        </div
    </div>

    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Color</p>
            <p>Select the colors in your closet</p>
            <input type="button" name="color" value="White" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Black" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Gray" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Red" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Orange" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Yellow" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Green" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Blue" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Purple" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Brown" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Peach" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Mint" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Magenta" onclick="changeColor(this)"/>
            <input type="button" name="color" value="Off-White" onclick="changeColor(this)"/>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Patterns</p>
            <p>Select the patterns in your closet</p>
            <input type="button" name="pattern" value="Striped" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Multi" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Dots" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Paisley" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Argyle" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Checkered" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Floral" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Brocade" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Houndstooth" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Tartan" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Chevron/ZigZag" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Toile" onclick="changeColor(this)"/>
            <input type="button" name="pattern" value="Tie-Dye" onclick="changeColor(this)"/>
        </div>
    </div>
    
    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Clothes Size</p>
            <p>Select the sizes in your closet</p>
            <input type="button" name="size" value="XXS" onclick="changeColor(this)"/>
            <input type="button" name="size" value="XS" onclick="changeColor(this)"/>
            <input type="button" name="size" value="S" onclick="changeColor(this)"/>
            <input type="button" name="size" value="M" onclick="changeColor(this)"/>
            <input type="button" name="size" value="L" onclick="changeColor(this)"/>
            <input type="button" name="size" value="XL" onclick="changeColor(this)"/>
            <input type="button" name="size" value="XXL" onclick="changeColor(this)"/>
            <input type="button" name="size" value="00" onclick="changeColor(this)"/>
            <input type="button" name="size" value="0" onclick="changeColor(this)"/>
            <input type="button" name="size" value="2" onclick="changeColor(this)"/>
            <input type="button" name="size" value="4" onclick="changeColor(this)"/>
            <input type="button" name="size" value="6" onclick="changeColor(this)"/>
            <input type="button" name="size" value="8" onclick="changeColor(this)"/>
            <input type="button" name="size" value="10" onclick="changeColor(this)"/>
            <input type="button" name="size" value="12" onclick="changeColor(this)"/>
            <input type="button" name="size" value="14" onclick="changeColor(this)"/>
            <input type="button" name="size" value="16" onclick="changeColor(this)"/>
            <input type="button" name="size" value="18" onclick="changeColor(this)"/>
            <input type="button" name="size" value="20" onclick="changeColor(this)"/>
            <input type="button" name="size" value="22" onclick="changeColor(this)"/>
            <input type="button" name="size" value="24" onclick="changeColor(this)"/>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Pants Size</p>
            <p>Select the sizes of your jeans and pants in your closet</p>
            <input type="button" name="pants" value="26" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="27" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="28" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="29" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="30" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="31" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="32" onclick="changeColor(this)"/>
            <input type="button" name="pants" value="33" onclick="changeColor(this)"/>
        </div>
    </div>
    
    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Fit</p>
            <p>Select Fit</p>
            <input type="button" name="fit" value="Regular" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Bootcut" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Skinny" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Low-rise" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Flare" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Baggy" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Fitted" onclick="changeColor(this)"/>
            <input type="button" name="fit" value="Shift" onclick="changeColor(this)"/>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <input type="button" value="Create Database!" onclick="location.href='organize3.php'; return false">
        </div>
    </div>
    
    <script> function changeColor(button) //Javascript function to change background of button once it's been clicked
    {
        button.className+= " buttonClicked";
    }
    </script>

</body>