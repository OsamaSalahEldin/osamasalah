<?php











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
	





<section id="secOne">



						       <form method="GET">

                 <div>
																  <label for="NUM1" > <span>check the number &RightAngleBracket;<span></label>
																	 <input type="number" name="num1" id="NUM1">
																</div>  
																<button type="sumit">chek it</button>




                <div>



             
                  <?php
																		
																		
																		if($_GET){




                   $value = $_GET['num1'];


																			if($value > 0){

                    echo "the numer " . $value . " is positive " ;


																			}

																			elseif($value < 0){

                    echo "the numer " . $value. " is negative " ;



																			}


																			elseif($value == 0){

                    echo "please enter the number" ;



																			}






																		}
																		
																		
																		
																		
																		
																		
																		
																		
																		?>





												    </div>






													
             </form>

            


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
				width:50%;
				height:50px;
				font-size: 18px;
				background-color: red;
				outline:none;
				border: 0;
				color:white;
				font-weight: bold;
				cursor: pointer;
				margin-left: 0px;
				border-top-left-radius: 20px ;
				box-shadow:1px 1px 10px #00000063;
				margin-bottom: 30px;
			}
  </style>




</body>
</html>