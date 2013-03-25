<!--This is the second page for users to design their database-->
<!--Here users will select the values for their database-->
<!--Values selected here will appear in drop down select lists on organize3 page.--> 
<?php session_start(); ?>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js">
    </script>
    <title>Calculate My Closet</title>
<head>
<body>
    <h1 style="font-family:Futura; color:coral">Calculate My Closet</h1>
    <h2 style="font-family:Futura">Organize Your Closet</h2>

    <script>
    $(document).ready(function(){
        $("button").click(function(){
            $(this).toggleClass("clicked");
        });
    });
    </script>
    
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

    .clicked{
        background-color: coral;
    }

    </style>
    <!-- END OF CSS STUFF -->

    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Types of Clothing</p>
            <p>Select the Types of clothes in your closet</p>
            <button id="clicked" name="type">Jeans</button>
            <button id="clicked" name="type">Pants</button>
            <button id="clicked" name="type">Shorts</button>
            <button id="clicked" name="type">Skirt</button>
            <button id="clicked" name="type">Dress</button>
            <button id="clicked" name="type">Tshirt</button>
            <button id="clicked" name="type">Shirt</button>
            <button id="clicked" name="type">Blouse</button>
            <button id="clicked" name="type">Coat</button>
            <button id="clicked" name="type">Jacket</button>
            <button id="clicked" name="type">Athletic Top</button>
            <button id="clicked" name="type">Athletic Bottom</button>
        </div>
    </div>

    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Price Range</p>
            <p>Select Price Ranges</p>
            <button id="clicked" name="price">$10 or less</button>
            <button id="clicked" name="price">$11-$15</button>
            <button id="clicked" name="price">$16-$20</button>
            <button id="clicked" name="price">$21-$30</button>
            <button id="clicked" name="price">$31-$40</button>
            <button id="clicked" name="price">$41-$50</button>
            <button id="clicked" name="price">$51-$60</button>
            <button id="clicked" name="price">$61-$70</button>
            <button id="clicked" name="price">$71-$80</button>
            <button id="clicked" name="price">$81-$100</button>
            <button id="clicked" name="price">$100-$150</button>
            <button id="clicked" name="price">$150-$200</button>
        </div
    </div>

    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Color</p>
            <p>Select the colors in your closet</p>
            <button id="clicked" name="color">White</button>
            <button id="clicked" name="color">Black</button>
            <button id="clicked" name="color">Gray</button>
            <button id="clicked" name="color">Red</button>
            <button id="clicked" name="color">Orange</button>
            <button id="clicked" name="color">Yellow</button>
            <button id="clicked" name="color">Green</button>
            <button id="clicked" name="color">Blue</button>
            <button id="clicked" name="color">Purple</button>
            <button id="clicked" name="color">Brown</button>
            <button id="clicked" name="color">Peach</button>
            <button id="clicked" name="color">Mint</button>
            <button id="clicked" name="color">Magenta</button>
            <button id="clicked" name="color">Off-White</button>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Patterns</p>
            <p>Select the patterns in your closet</p>
            <button id="clicked" name="pattern">Striped</button>
            <button id="clicked" name="pattern">Multi</button>
            <button id="clicked" name="pattern">Dots</button>
            <button id="clicked" name="pattern">Paisley</button>
            <button id="clicked" name="pattern">Argyle</button>
            <button id="clicked" name="pattern">Checkered</button>
            <button id="clicked" name="pattern">Floral</button>
            <button id="clicked" name="pattern">Brocade</button>
            <button id="clicked" name="pattern">Houndstooth</button>
            <button id="clicked" name="pattern">Tartan</button>
            <button id="clicked" name="pattern">Chevron/ZigZag</button>
            <button id="clicked" name="pattern">Toile</button>
            <button id="clicked" name="pattern">Tie-Dye</button>
        </div>
    </div>
    
    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Clothes Size</p>
            <p>Select the sizes in your closet</p>
            <button id="clicked" name="size">XXS</button>
            <button id="clicked" name="size">XS</button>
            <button id="clicked" name="size">S</button>
            <button id="clicked" name="size">M</button>
            <button id="clicked" name="size">L</button>
            <button id="clicked" name="size">XL</button>
            <button id="clicked" name="size">XXL</button>
            <button id="clicked" name="size">00</button>
            <button id="clicked" name="size">0</button>
            <button id="clicked" name="size">2</button>
            <button id="clicked" name="size">4</button>
            <button id="clicked" name="size">6</button>
            <button id="clicked" name="size">8</button>
            <button id="clicked" name="size">10</button>
            <button id="clicked" name="size">12</button>
            <button id="clicked" name="size">14</button>
            <button id="clicked" name="size">16</button>
            <button id="clicked" name="size">18</button>
            <button id="clicked" name="size">20</button>
            <button id="clicked" name="size">22</button>
            <button id="clicked" name="size">24</button>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <p style="font-family:Futura">Pants Size</p>
            <p>Select the sizes of your jeans and pants in your closet</p>
            <button id="clicked" name="pant size">26</button>
            <button id="clicked" name="pant size">27</button>
            <button id="clicked" name="pant size">28</button>
            <button id="clicked" name="pant size">29</button>
            <button id="clicked" name="pant size">30</button>
            <button id="clicked" name="pant size">31</button>
            <button id="clicked" name="pant size">32</button>
            <button id="clicked" name="pant size">33</button>
        </div>
    </div>
    
    <div id="wrap">
        <div class="left_col">
            <p style="font-family:Futura">Fit</p>
            <p>Select Fit</p>
            <button id="clicked" name="fit">Regular</button>
            <button id="clicked" name="fit">Bootcut</button>
            <button id="clicked" name="fit">Skinny</button>
            <button id="clicked" name="fit">Low-rise</button>
            <button id="clicked" name="fit">Flare</button>
            <button id="clicked" name="fit">Baggy</button>
            <button id="clicked" name="fit">Fitted</button>
            <button id="clicked" name="fit">Shift</button>
        </div>
    </div>
    
    <div id="wrap">
        <div class="right_col">
            <input type="button" value="Create Database!" onclick="location.href='organize3.php'; return false">
        </div>
    </div>
    
    <!--<script> function changeColor(button) //Javascript function to change background of button once it's been clicked
    {
        button.className+= " buttonClicked";
    }
    </script>-->

</body>