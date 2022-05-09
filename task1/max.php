<?php



?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>max.php</title>
</head>
<body>
	         

      <section id="secOne">



						       <form method="POST">

                <div>
																<label for="NUM1" >first number</label>
																	<input type="number" name="num1" id="NUM1">
																</div>  

													    <div>
																	<label for="NUM2">second number</label>
																	<input type="number" name="num2" id="NUM2">
																	</div>

																	<div>
																			<label for="NUM3">third number</label>
																			<input type="number" name="num3" id="NUM3">
																			<button type="sumit">result </button>
																	</div> 

             </form>

             <?php

            

            




            if($_POST){


													$num1 =$_POST['num1'];   
             $num2 =$_POST['num2'];  
													$num3 =$_POST['num3'];
              


													if( $num1 >$num2 && $num1 > $num3   ){
														
														echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the max number is" .  $num1 ." </div> " ;
              if($num2 > $num3){
															echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the min number is" .  $num3 ." </div> ";
														}

													}
													elseif ($num2 > $num1 && $num2 > $num3  ){


														echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the max number is" .  $num2 ." </div> " ;
              if($num1 > $num3 ){
															echo "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the min number is" .  $num3 ." </div> ";
														}


													}


													elseif ($num3 > $num1 && $num3 > $num2  ){


														echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the max number is" .  $num3 ." </div> " ;

             if($num1 > $num2){
														echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the min number is" .  $num2 ." </div> " ;
													}

													}
													elseif ($num3 == $num1 && $num3 == $num2 && $num1 == $num2){


														echo  "<div style ='text-align:center; margin-top:20px; font-size:20px; color:red;'>" ." the  number equal </div> " ;



													}

												}
												
	


         ?>



						</section>

         


  <style>
  *{
			margin:0;
			padding:0;
		}
   #secOne{
				width:1124px;
				margin-left:auto;
				margin-right:auto;
 
			}


			
			#secOne form{
				width:30%;
				position: relative;
				padding-top: 100px;
				margin-left: auto;
				margin-right: auto;

				color:red;
				font-family:Arial, Helvetica, sans-serif;
			}
		
  label{
			display:inline-block;
			margin-bottom: 10px;;
		}


			#secOne input{
				   width:100%;
							height:25px;
							padding-left:3px;
					  margin-bottom: 10px;
						

			}

			button{
				display:inline-block;
				margin-top:10px;
				width:100%;
				height:50px;
				font-size: 18px;
				background-color: red;
				border-radius: 2px;
				outline:none;
				border: 0;
				color:white;
				font-weight: bold;
				cursor: pointer;
				margin-left: 3px;
			}
  </style>

		






</body>
</html>



