<?php


session_start();

 $_SESSION['cleanliness'];
	$_SESSION["service"];
	$_SESSION["nursing"];
	$_SESSION["doctor"];
	$_SESSION["hospital"];




	if( $_SESSION['cleanliness'] + $_SESSION["service"] + 	$_SESSION["nursing"] + 	$_SESSION["doctor"]+ $_SESSION["hospital"] >= 25){


		$finalResult = "good ";
		$divresult = "<div style='text-align:center; background-color:green; padding:10px 30px ; font-weight:bold; color:white;'>Thank you</div>";
		
		
		}
		
		
		elseif($_SESSION['cleanliness'] + $_SESSION["service"] + 	$_SESSION["nursing"] + 	$_SESSION["doctor"]+ $_SESSION["hospital"] < 25){
		
			$finalResult = "bad";
		
			$divresult = "<div style='text-align:center; background-color:red; padding:10px 30px ;font-weight:bold; color:white;'  >please contact the patient to find out the reason for the bad evaluation {$_SESSION['userphone']}</div>";
		}




if($_SESSION['cleanliness'] == 0)  {

  $result = "Bad";


}
elseif($_SESSION['cleanliness'] == 3){

 $result = "good";

}

elseif($_SESSION['cleanliness'] == 5){

 $result = "very good";

}

elseif($_SESSION['cleanliness'] == 10){

 $result = "Excellent";

}



if($_SESSION['service'] == 0)  {

	$result2 = "Bad";


}
elseif($_SESSION['service'] == 3){

$result2 = "good";

}

elseif($_SESSION['service'] == 5){

$result2 = "very good";

}

elseif($_SESSION['service'] == 10){

$result2 = "Excellent";

}



if($_SESSION['nursing'] == 0)  {

	$result3 = "Bad";


}
elseif($_SESSION['nursing'] == 3){

$result3 = "good";

}

elseif($_SESSION['nursing'] == 5){

$result3 = "very good";

}

elseif($_SESSION['nursing'] == 10){

$result3 = "Excellent";

}



if($_SESSION['doctor'] == 0)  {

	$result4 = "Bad";


}
elseif($_SESSION['doctor'] == 3){

$result4 = "good";

}

elseif($_SESSION['doctor'] == 5){

$result4 = "very good";

}

elseif($_SESSION['doctor'] == 10){

$result4 = "Excellent";

}



if($_SESSION['hospital'] == 0)  {

	$result5 = "Bad";


}
elseif($_SESSION['hospital'] == 3){

$result5 = "good";

}

elseif($_SESSION['hospital'] == 5){

$result5 = "very good";

}

elseif($_SESSION['hospital'] == 10){

$result5 = "Excellent";

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
									      <div class="header">
																    <div class="contentleft">question</div>
																				<div class="contentright">review</div>
															</div>

               <div class="section">
																     <div class="first">
																					     <div class="questions"> Are you satisfied with the level of cleanliness?</div>
                          <div class="result"><?php echo $result ?? ""?></div>
																					</div>
																					<div class="second">
																					      <div class="questions"> Are you satisfied with the level of cleanliness?</div>
                           <div class="result"><?php echo $result2 ?? ""?></div>
																					</div>
																					<div class="third">
																				      	<div class="questions"> Are you satisfied with the level of cleanliness?</div>
                           <div class="result"><?php echo $result3 ?? ""?></div>
																					</div>
																					<div class="four">
																				     	<div class="questions"> Are you satisfied with the level of cleanliness?</div>
                          <div class="result"><?php echo $result4 ?? "" ?></div>
																						</div>
																						<div class="five">
																					    	<div class="questions"> Are you satisfied with the level of cleanliness?</div>
                          <div class="result"><?php echo $result5 ?? ""?></div>
																						</div>
															</div>



															<div class="footer">
																    <div class="contentleft">TOTAL REVIEW</div>
																				<div class="contentright"><?php echo $finalResult ?? "" ?> </div>
															</div>

															<?php echo $divresult ?? ""; ?>

								</div>
			</div>


<style>
 
	*{
margin:0;
padding:0;
box-sizing:border-box;
font-family: Arial, Helvetica, sans-serif;
}
.first,.second,.third,.four,.five{
	display:flex;
	justify-content: space-between;
	align-items: center;
	padding:20px 30px;
	font-weight: bold;
	font-size: 20px;
}
.container{
  height:100vh;
  width:1140px;
		margin-left:auto;
		margin-right:auto;
  position: relative;
}

.parent{

position:relative;
top:50%;
left:50%;
transform: translate(-50% , -50%);
height:fit-content;

}
.footer,.header{
	background-color: blue;
	color:white;
	display:flex;
	justify-content:space-between;
 padding:10px 30px;
 font-weight:bold;
}

</style>






	
</body>
</html>