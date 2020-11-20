<?php
session_start();
$con=mysqli_connect('localhost','id15448083_jifry','Honeybunch512@','id15448083_jifryrose');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/12.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#0086b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Abisha"){
				 var arr=["Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				 }
				 else if(a==="Divya K"){
					var arr=["Abisha","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				}
				else if(a==="Giftlin Bibi"){
					var arr=["Abisha","Divya K","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				}
				else if(a==="Hamlin Hemi"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				 }
				 else if(a==="Jirinto"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Joe Akash","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				 }
				 else if(a==="Joe Akash"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Kavya","Rajan Viveganantha T","Shaili","Subashree"];
				 }
				 else if(a==="Kavya"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Rajan Viveganantha T","Shaili","Subashree"];
				 }
				 else if(a==="Rajan Viveganantha T"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Shaili","Subashree"];
				 }
				 else if(a==="Shaili"){
					var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Subashree"];
				 }
				 else if(a==="Subashree"){
				 var arr=["Abisha","Divya K","Giftlin Bibi","Hamlin Hemi","Jirinto","Joe Akash","Kavya","Rajan Viveganantha T","Shaili"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Abisha">Abisha</option>
			<option value="Divya K">Divya K</option>
			<option value="Giftlin Bibi">Giftlin Bibi</option>
			<option value="Hamlin Hemi">Hamlin Hemi</option>
			<option value="Jirinto">Jirinto</option>
			<option value="Joe Akash">Joe Akash</option>
			<option value="Kavya">Kavya</option>
			<option value="Rajan Viveganantha T">Rajan Viveganantha T</option>
			<option value="Shaili">Shaili</option>
			<option value="Subashree">Subashree</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>
