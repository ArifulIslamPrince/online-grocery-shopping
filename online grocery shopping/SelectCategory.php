<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 40px;
	font-weight: bold;
	color: red;
}
body {background:#ECF0F1;text-align:center;}
body {font-family: Verdana,sans-serif;}
div.selectCategoty {
    margin: 50px;
    border: 10px solid #ccc;
    float: left;
    width: 320px;
}

div.selectCategoty:hover {
    border: 10px solid #777;
}

div.selectCategoty img {
    width: 100%;
    height: auto;
}

div.description {
    padding: 25px;
    text-align: center;
}

/*Dropdown and nevigator Header and copyright footer*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: lightblue
}

li {
    float: left;
	border-right:1px solid black;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: red;
}
li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.active {
    background-color: #4CAF50;
}

.footer{ 
       position: fixed;     
       text-align: center;    
       bottom: 0px; 
       width: 100%;
	   font-family: Times New Roman;
} 
div {
    border-radius: 1px;
    background-color: lightblue;
    padding: 1px;
} 
</style>
</head>
<?php require_once("SelectItemDb.php"); ?>
<body>

<body>
<ul>
  <li><a href="wellcome.html">Home</a></li>
  <li><a href="#about">About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Offers</a>
    <div class="dropdown-content">
      <a href="#">Grocery</a>
      <a href="#">Cosmetics</a>
      <a href="#">Toys</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Payment Methods</a>
    <div class="dropdown-content">
      <a href="#">Cash On Delivery</a>
      <a href="#">BKash</a>
      <a href="#">Credit Card</a>
    </div>
  </li>
  <li><a href="#contact">Contacts</a></li>
   <li style="float:right"><a class="active" href="wellcome.html">Log Out</a></li>
  <li style="float:right"><a class="active" href="AdminLogin.html">Admin login</a></li>
</ul>

<br><br>
<h1>Choose Product Category Please....</h1>
<br>
<?php session_start();
?>

<!ei function grocery.html page e niye jabe item select korar jonno. image e link deya, so image click korle next page e jabe>
<?php  
$jsn=getJSONFromDB("select * from category");
$jData=json_decode($jsn);
foreach($jData as $v){ ?>
<div class="selectCategoty">
   <a href="SelectItem.php?cid=<?php echo $v->Id; ?>">
   
  <div class="description" name="grocery" id="gr">Click For <?php echo $v->Name;?><br></div>
  </a>
</div>
<?php
}
?>


</div>
<div class="footer"> © All Rights Reserved by PREETUZA</div>
</body>
</html>