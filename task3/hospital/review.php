<?php 

session_start();


if($_POST){

	
  	$cleanliness = $_POST['cleanliness'];
			$service = $_POST['service'];
			$nursing = $_POST['nursing'];
			$doctor = $_POST['doctor'];
			$hospital = $_POST['hospital'];
			
			
			$_SESSION["cleanliness"]=$cleanliness;
			$_SESSION["service"]=$service;
			$_SESSION["nursing"]=$nursing;
			$_SESSION["doctor"]=$doctor;
			$_SESSION["hospital"]=$hospital;

			header("location:result.php");
		
		
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
	

<div class="container">
	      <div class="parent">
           <div class="containerforforms">
											        <div class="first-childheader">questions</div>
																			<div class="containerheadergrade">
																				     <div>Bad</div>
																									<div>Good</div>
																									<div>Very good</div>
																									<div>Excellent</div>
																			</div>
										 </div>
         
           <form action="" method="POST">


           <div class="containerforchekbox">
										    	<div class="questions"> Are you satisfied with the level of cleanliness?</div>
												   <div class="checkbox">
																 <input type="radio" name="cleanliness" value="0">
																	<input type="radio" name="cleanliness" value="3">
																	<input type="radio" name="cleanliness" value="5">
																	<input type="radio"  name="cleanliness" value="10">
															</div>
															
											</div>
											<div class="containerforchekbox" style="background-color:blue; color:white;font-weight:bold;">
										    	<div class="questions"> Are you satisfied with the service prices?</div>
												   <div class="checkbox">
																 <input type="radio" name="service" value="0">
																	<input type="radio" name="service"value="3" >
																	<input type="radio" name="service" value="5">
																	<input type="radio"  name="service" value="10">
															</div>				
											</div>

           <div class="containerforchekbox">
										    	<div class="questions">Are you satisfied with the nursing service </div>
												   <div class="checkbox">
																 <input type="radio" name="nursing" value="0">
																	<input type="radio" name="nursing" value="3">
																	<input type="radio" name="nursing" value="5">
																	<input type="radio"  name="nursing"value="10" >
															</div>				
											</div>


											<div class="containerforchekbox" style="background-color:blue; color:white;font-weight:bold;" >
										    	<div class="questions">Are you satisfied with the level of the doctor? </div>
												   <div class="checkbox">
																 <input type="radio" name="doctor"value= "0" >
																	<input type="radio" name="doctor"value="3" >
																	<input type="radio" name="doctor" value="5">
																	<input type="radio"  name="doctor" value="10">
															</div>				
											</div>


											<div class="containerforchekbox">
										    	<div class="questions"> Are you satisfied with the calmness in the hospital?</div>
												   <div class="checkbox">
																 <input type="radio" name="hospital" value="0">
																	<input type="radio" name="hospital" value="3">
																	<input type="radio" name="hospital"value="5" >
																	<input type="radio"  name="hospital" value="10">
															</div>				
											</div>
											
         <button style="cursor:pointer; font-size:20px;width:100%;display:inline-block;padding:10px 0px;border:0;background-color:blue; color:white; font-weight:bold" type="submit" name="submit">result</button>
									  <div style="padding-top:10px; color:red;">
															<?php 
															if(isset($error2)){
															echo $error2;
															}
															
															?>
															</div>
          
											</form>
           

								
						</div>   
</div>




<style>
*{

	margin:0;
padding:0;
box-sizing:border-box;
font-family: Arial, Helvetica, sans-serif;

}
input[type="radio"]{
	width:84px;
}

.containerforchekbox{
	padding-top: 20px ;
	padding-bottom: 20px;
	display:flex;
	justify-content: space-between;
	padding-left: 30px ;
	padding-right:30px;
}

.container{
	height:100vh;
	width:1140px;
	margin-right:auto;
	margin-left:auto;
}

.containerforforms{
	display:flex;
	justify-content: space-between;
	align-items: center;
	background-color: blue;
	padding:10px 0;
}

.parent{

	position:relative;
	top:50%;
	left:50%;
	transform: translate(-50% , -50%);
	height:fit-content;

}

.containerheadergrade{
	display:flex;
	justify-content: space-between;
	color: white;
	font-weight:bold;
	font-size: 17px;
}

.containerheadergrade div{
	margin-right:30px;

}
.first-childheader{
	padding-left:30px;
	color: white;
	font-weight:bold;
	font-size: 17px;
}
</style>





</body>
</html>