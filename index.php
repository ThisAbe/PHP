<?php include('header.php')?>
<body>

<form action="index.php" method="POST">
<h1 align="center"> World Deathmatch 2019 Registration</h1>

<br>
<br>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

if(($_POST['name'] == NULL) OR ($_POST['name'] == "")){
	echo "You did not enter a name! <br />";
}
if(($_POST['email'] == NULL) OR ($_POST['email'] == "")){
	echo "You did not enter an email!! <br />";
}
if(($_POST['weapon'] == NULL) OR ($_POST['weapon'] == "")){
	echo "You did not enter a weapon!!! <br />";
}
if($_POST['gender'] == NULL){
	echo "You need to select a gender, or I'll assume it!!! <br />";
}
if($_POST['Month'] == 'Month'){
	echo "You need to pick a month for your birthday <br />";
}
if($_POST['Day'] == 'Day'){
	echo "You need to pick a day for your birthday <br />";
}
if($_POST['Year'] == 'Year'){
	echo "You need to pick a year for your birthday <br />";
}
if(($_POST['battlecry'] == NULL) OR ($_POST['battlecry'] == "")){
	echo "You forgot your battle cry which is necessary strike fear
			and despair into your opponents <br />";
}
if(($_POST["captcha"] == "") OR ($_SESSION["code"] != $_POST["captcha"])){
	
	echo "The captcha was empty or wrong, you zombie!";
}
}
?>

<fieldset><legend>Submit your info here</legend>
<p><label for="name">Name <input type="text" name="name" value="<?php 
if(isset($_POST['name'])){
	echo $_POST['name'];
}
?>"/></label></p>
<p><label for="email">Email Address <input type="text" name="email" value="<?php 
if(isset($_POST['email'])){
	echo $_POST['email'];
}
?>"

/></label></p>
<p><label for="weapon">Weapon of choice: <input type="text" name="weapon" 
value="<?php 
if(isset($_POST['weapon'])){
	echo $_POST['weapon'];
}
?>"/></label></p>
<!---Radio buttons---->
<p><label for="gender">Gender: </label>
<input type="radio" name="gender" value="Million Turtles"
<?php if (isset($_POST['gender']) && $_POST['gender']=="Million Turtles"){
	echo 'checked=\"checked\"';
}
?>>Million Turtles
<input type="radio" name="gender" value="Firstborn Warrior"
<?php if (isset($_POST['gender']) && $_POST['gender']=="Firstborn Warrior"){
	echo 'checked=\"checked\"';
}
?>>Firstborn Warrior
<input type="radio" name="gender" value="Dinosaur" 
<?php if (isset($_POST['gender']) && $_POST['gender']=="Dinosaur"){
	echo 'checked=\"checked\"';
}
?>>Dinosaur
</p>
<!---Checkboxes---->
<p><label>Pet:
<p><input type="checkbox" name="elemental" value="elemental" 
<?php 
if($_POST['elemental'] == 'elemental'){
	echo 'checked=\"checked\"';
}
?>/>Elemental</p>
<p><input type="checkbox" name="abox" value="abox" 
<?php 
if($_POST['abox'] == 'abox'){
	echo 'checked=\"checked\"';
}
?>/>A Box</p>
<p><input type="checkbox" name="thanos" value="thanos" 
<?php 
if($_POST['thanos'] == 'thanos'){
	echo 'checked=\"checked\"';
}
?>/>Thanos</p>
</label>
</p>
<!---Dropdown menu--->
<p><label>Birthday:
<?php
//Dropdown menu PHP
$months = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
$monthdefault = array ('Month');
$monthsarray = array_merge($monthdefault, $months);
$days = range(1,31);
$daydefault = array ('Day');
$daysarray = array_merge($daydefault, $days);
$years = range(1919,2019);
$yeardefault = array('Year');
$yearsarray = array_merge($yeardefault, $years);

echo "<select name=\"Month\">";
foreach ($monthsarray as $value){
	if ($_REQUEST['Month'] == $value){
		$isselected = "Selected";}
	else{
		$isselected = "";
	}
	echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo "</select>";

echo "<select name=\"Day\">";
foreach ($daysarray as $value){
	if ($_REQUEST['Day'] == $value){
		$isselected = "Selected";}
	else{
		$isselected = "";
	}
	echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo "</select>";

echo "<select name=\"Year\">";
foreach ($yearsarray as $value){
	if ($_REQUEST['Year'] == $value){
		$isselected = "selected";}
	else{
		$isselected = "";
	}
	echo "<option value=\"$value\" $isselected>$value"."</option>\n";
}
echo "</select>";

?>
</label>
</p>
<!---textarea--->
<p><label>Battlecry:<br/> <textarea name="battlecry" rows="4" cols="40">
<?php 
if(isset($_POST['battlecry'])){
	echo $_POST['battlecry'];
}
?>
</textarea></label></p>

<!---Captcha--->
Prove that you're not a zombie
<br>
<img src="captcha.php"/><br><br>
<input name="captcha" type="text">



</fieldset>

<p align="center"><input type="submit" name="submit" value="Submit Info"/></p>

<?php 
//Final Validation

if($_SESSION["code"] == $_POST["captcha"]){
	if(($_POST['name'] != NULL) AND ($_POST['name'] != "")
		AND($_POST['email'] != NULL) AND ($_POST['email'] != "")
		AND($_POST['weapon'] != NULL) AND ($_POST['weapon'] != "")
		AND($_POST['Month'] != 'Month') AND ($_POST['Year'] != 'Year')
		AND($_POST['Day'] != 'Day') 
		AND (ISSET($_POST['gender']))AND ($_POST['battlecry'] != NULL))
		{

			echo "Welcome, ".$_POST['name'].". Your weapon, ". $_POST['weapon']. " is very
			cool, it's a fitting weapon for a " . $_POST['gender'] . ".<br/>Your first opponent will be a 
			million turtles with a pet coffee elemental and it will begin tomorrow at noon.<br />".
			$_POST['battlecry'];
		}
}
?>
<?php include('footer.php')?>