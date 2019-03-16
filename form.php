<!DOCTYPE html>
<html>
<head>
<title> Form PHP </title>
<style>
    img {
    display: block;
    margin-left: auto;
    margin-right: auto;
	height:100%;
	width:100%;
	}
</style>
</head>

<body>

<h1 align="center"> Form PHP</h1>
<br>
<img src="FormImg.JPG" alt="Source Code">
<br>
<form action="http://google.com" method="post">

<fieldset><legend>Submit your info here</legend>
<p><label>Name <input type="text" name="name" maxlength="40" value="Abe"></label></p>
<p><label>Email Address <input type="text" name="email" maxlength="80" value="aajith@uwm.edu"></label></p>
<p><label for="gender">Gender: </label>
<input type="radio" name="gender" value="M" CHECKED />Male
<input type="radio" name="gender" value="F"/>Female
</p>
<p><input type="checkbox" name="Robot" value="Yes" />Robot</p>
<p><input type="checkbox" name="Human" value="Yes" CHECKED />Human</p>


<p><label>Age:
<select name="age">
<option value="0-20">Under 21</option>
<option value="21-65">21-65</option>
<option value="65+">65+</option>
</select>
</label>
</p>

<p><label>Additional Info:<br/> <textarea name="AddInfo" rows="4" cols="40"></textarea></label></p>


</fieldset>

<p align="center"><input type="submit" name="submit" value="Submit Info"/></p>

</body>
</html>