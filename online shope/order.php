
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
    <link rel="stylesheet" href="order.css">
</head>
<body>
<header>
<div class="head">
<h1> Order </h1>
    </div>
    </header>
<div class="style">
<fieldset>
<h2><legend>Makup orders :</legend><h2>
<form action="in.php" method="post"> 

<p><label> Your Name : </label> 
<input name='YourName' type="text"></p>
<p><label>  Country : </label>
<select name="country"> 
<option value ="USA"> USA</option>
 <option value ="France">France </option>
 <option value ="Turkey">Turkey </option>
 <option value ="Russia">Russia </option>
 <option value ="Canada">Canada </option>
 <option value ="Australi">Australi </option>
 <option value ="Mexico">Mexico </option>
 <option value ="Brazil">Brazil </option>
 <option value ="Malaysia"> Malaysia</option>
 <option value ="Thiland">Thiland </option>
 <option value ="Italy">Italy </option>
 <option value ="KSA"> KSA</option>
 <option value ="Oman">Oman </option>
 <option value ="Egypt">Egypt </option>
 <option value ="UAE"> UAE</option>
 <option value ="Lebanon"> Lebanon</option>
    <option value ="Sudan">Sudan </option>  
</select></p>
<p><label>Account Number:</label>
<input name='AccountNumber' type="number"></p>
<lable>Currency :</lable>
<select name="Currency">
 <option value ="USD">USD</option>
 <option value ="EUR">EUR</option>
 <option value ="SAR">SAR</option>
 <option value ="EGP">EGP</option>
 <option value ="SDG">SDG</option>
</select>


<P><lable>Brand Name :</lable>
<select name="BrandName">
 <option value ="Mac">Mac</option>
 <option value ="Huda">Huda</option>
 <option value =""></option>
</select>
<p><label> Your Order : </label> 
<input name='YourOrder' type="text"></p>
<p><label>Order Count : </label> 
<input name='OrderCount' type="text"></p>
<P><lable> Address: </lable><input name='Address' type="text"> </P>
<div class="contcat">


<h1> CONTACT US :-  </h1>
<h2> our location : </h2> 
<h3> Alryad.</h3>

<h2> My Number :</h2>
<ol>
 <li> +249100129551 </li>
 <li> +249969085157 </li>
 <li> +249928241389 </li>
</ol>

</div>
<center>
<button name='confirming'>confirming</button>
</center>
    </P>
    </form>
    </fieldset>
    </div>
    
</body>
</html>