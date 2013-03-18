<!--This is the second page for users to design their database-->
<!--Here users will select the values for their database-->
<!--Values selected here will appear in drop down select lists on organize3 page.--> 

<h1 style="font-family:Futura; color:coral">Design Your Database</h1>
<p style="font-family:Futura">Below select all fields you would like to use in your Database</p>

<p style="font-family:Futura">Choose a name for your Database:</p>
<textarea name="name" cols="20" rows="1" wrap="off"> </textarea>
<p style="font-family:Futura">Types of Clothing</p>
Jeans <input type="checkbox" name="type" value="Jeans" />
Pants <input type="checkbox" name="type" value="Pants" />
Shorts <input type="checkbox" name="type" value="Shorts" />
Skirts <input type="checkbox" name="type" value="Skirt" />
Dresses <input type="checkbox" name="type" value="Dress" />
T-Shirt <input type="checkbox" name="type" value="Tshirt" />
Shirt <input type="checkbox" name="type" value="Shirt" />
Blouse <input type="checkbox" name="type" value="Blouse" />
Coat <input type="checkbox" name="type" value="Coat" />
Jacket <input type="checkbox" name="type" value="Jacket" />

<p style="font-family:Futura">Price Range</p>
0-15 <input type="checkbox" name="price" value="Fifteen" />
15-25 <input type="checkbox" name="price" value="TwentyFive" />
25-50 <input type="checkbox" name="price" value="Fifty" />
50-75 <input type="checkbox" name="price" value="SeventyFive" />
75-100 <input type="checkbox" name="price" value="Hundred" />
100-150 <input type="checkbox" name="price" value="HundredFifty" />
150+ <input type="checkbox" name="price" value="Over" />

<p style="font-family:Futura">Color and Patterns</p>
White <input type="checkbox" name="color" value="White" />
Black <input type="checkbox" name="color" value="Black" />
Gray <input type="checkbox" name="color" value="Gray" />
Red <input type="checkbox" name="color" value="Red" />
Orange <input type="checkbox" name="color" value="Orange" />
Yellow <input type="checkbox" name="color" value="Yellow" />
Green <input type="checkbox" name="color" value="Green" />
Blue <input type="checkbox" name="color" value="Blue" />
Purple <input type="checkbox" name="color" value="Purple" />
Brown <input type="checkbox" name="color" value="Brown" />
Multi Polka Dots <input type="checkbox" name="color" value="Multi" />
Polka Dots <input type="checkbox" name="color" value="Dots" />
Paisley <input type="checkbox" name="color" value="Paisley" />

<p><input type="button" value="Create Database"
  onclick="location.href='database.php'; return false"></p>