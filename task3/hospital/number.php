<?php

session_start();

if($_POST){


if(empty($_POST["number"])){


$erro ="<div style='color:red; font-size:20px;font-weight:bold;'>please enter your number</div>";
	 


}else{


	$_SESSION['userphone'] = $_POST["number"];
  
  header("location:review.php");

}
  



}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
  

 <section>
	         
	    <div class="container">

          <form  method="post">
              

										   <div class="centerinput"> <input type="number"  value = '<?php echo $_POST["number"] ?>'name="number"><button>NUMBER</button>
												
													<?php
														  if(isset($erro)){
																	echo $erro;
														  } 
															
															
															?>
												
												</div>
													
										</form>         
			 	</div>

</section>




<style>

*{

margin:0;
padding:0;
box-sizing:border-box;
font-family: Arial, Helvetica, sans-serif;

}

section{
	height:100vh;	
	position: relative;
	background:url("../hospital/imageshospital/hands-unrecognizable-female-doctor-typing-keyboard-office_1098-20372.webp");
	background-repeat: no-repeat;
	background-size: cover;
}

.container{
  height:100vh;
  width:1140px;
		margin-left:auto;
		margin-right:auto;
  position: relative;
}

.centerinput{
 position: absolute;
 left:50%;
 top:50%;
	transform:translate(-50%,-50%);
	width:100%;
	text-align: center;
}

.centerinput  input{

 width:500px;
	height:50px;
border:0;
outline:10px solid #8cbfff9c;
padding-left: 10px;
font-size: 20px;
}

.centerinput  input + button{


height:120px;
width:120px;
font-size: 20px;
border-radius: 50%;
position: relative;
color:white;
font-weight:bold;
outline: none;
border: 0;
background-color: #3450eb;
outline: 8px solid #8cbfff;
padding:10px;
position: relative;
left:-10px;
cursor: pointer;

}
</style>

</body>
</html>