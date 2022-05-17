


<?php  


if($_POST){



	$name = $_POST['name'];
	$Amount=$_POST['amount'];
	$loanYears=['years'];
	$interest;

 if ($loanYears < 3){

 	$interest = 0.1;

	}else{

		$interest = 0.15;

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
	 
 <span class="log-design">bank</span>

<div class="container">
	    <div class="flexAll">
				     	<div class="logo">
											  <img src="images/03021f8821c50e2f68b5c73f24cbae47.jpg">
										</div>
										
						    <div class="form" >
										
											  <form method="POST">

														  <label for="name">YOUR NAME </label>
											    <div><input type="text" name="name" id="name"></div> 

															<label for="mount">LOAN AMOUNT </label>
															<div><input type="number" name="amount" id="mount"></div> 

															<label for="years">LOAN YEARS </label>
															<div><input type="number" id="year" name="years"></div> 

															<button>calculate</button>

														</form>
														<div class="result">
															   <?php
																		
																		if($_POST){



																			$name = $_POST['name'];
																			$Amount=$_POST['amount'];
																			$loanYears=$_POST['years'];
																			$interestRate;
																			$total;
																			$loanAfterInterested;
																			$monthly;
																		
																			if ($loanYears == 1){
																					$interestRate = 0.1;
																					$total= $Amount * $interestRate;
																						$loanAfterInterested= $Amount+$total ;
																						$monthly =round($loanAfterInterested /12 , 2) ;
																			}
															   elseif($loanYears== 2){
																			     $interestRate = 0.2;
																			     $total= $Amount * $interestRate;
																			    	$loanAfterInterested= $Amount+$total ;
																				   $monthly =	$loanAfterInterested /24 ;

																		}
																		elseif($loanYears== 3){
																			$interestRate = 0.3;
																			$total= $Amount * $interestRate;
																			$loanAfterInterested= $Amount+$total ;
																		$monthly =$loanAfterInterested /36 ;
												    	}
																	elseif($loanYears== 4){
																		$interestRate = 0.15 * 4;
																		$total= $Amount * $interestRate;
																		$loanAfterInterested= $Amount+$total ;
																	$monthly =round($loanAfterInterested /48 , 2) ;
															}
															elseif($loanYears== 5){
																$interestRate = 0.15 * 5;
																$total= $Amount * $interestRate;
																$loanAfterInterested= $Amount+$total ;
															$monthly =round($loanAfterInterested /60 , 2) ;
													}else{
														echo "you can not more than 5 years";die();
													}
																		


																		
																				
																			echo "<table border='1'>";

																							echo "<tr>"; 
																							echo "<th>name</th><th> interest rate</th><th>loan after interested</th><th>monthly</th>";
																							echo "<tr>";

																							echo "<tr>"; 
																							
																							echo "<td>{$name}</td><td>"; echo $total ; echo "</td><td>{$loanAfterInterested}</td><td>{$monthly}</td>"; 
																							
																							echo "<tr>";

																			echo "</table>";
																		
																		
																		
																		}
																		
																									
																		
																		?>
														</div>
										</div>
								
					</div>
				
</div>





  <style>
     .log-design{

						display: inline-block;
						position: relative;
						left:50px;
						top:50px;
						font-size: 50px;
						font-weight: 500;
						color:red;
       
					}  

					.log-design::after{

				  content:"";
						width:60px;
						height:60px;
						border-radius: 50%;
						top:0;
						right:-4px;
						position: absolute;
						background-color:#ebeb19b8 ;

}  

    table tr th{
     padding:10px 5px;
					background-color:#d1d2f5;
					color:red;
					margin-right: 10px;
					padding-left: 10px;

		
				}
				table tr {
     padding-left: 10px;
					padding-right: 10px;
					background-color:#d1d2f5 ;
					padding:10px;
					text-align: center;
				}
				table tr td {
     padding-left: 10px;
					padding-right: 10px;
					background-color:#d1d2f5 ;
					padding:10px;
					color: black;
					font-weight: bold;
				}



				table {
      border-collapse: collapse;
      }

			body{

				perspective: 1000px;
				background-color: #eee;
   font-family: Arial, Helvetica, sans-serif;
			color:#c9c94d;
			font-weight: bold;
			}
			.result{
				position: absolute;
				top:450px;
  
	   left:-5px;
			height:500px;
 margin-left: 10px;

			}
			*{
    padding:0;
				margin:0;
				box-sizing:border-box;
			}
			.container{
				width:1124px;
				margin-left:auto;
				margin-right:auto;
				perspective: 100px;
				
			}

			button{
				display:inline-block;
				padding:10px 20px;
				background-color:#ad2e2e ;
				color:#c9c94d;
				outline:0;
				border: 0;
				cursor: pointer;
				font-weight: bold;
				font-size: 20px;
				border-bottom-right-radius: 10px;
			}

			div.form{
				width:40%;
				position: relative;
				
   margin-top: 85px;
			background-color:#0f15cd;
			padding: 50px;
			border-radius: 10px;
			}
			div.form form input{
				width:90%;
				height:35px;
				outline: none;
				
				
			}
			div.form form div{
				margin-bottom: 30px;
				
			}
			label{
				display:inline-block;
				margin-bottom: 10px;
			}

			.flexAll{
			 display:flex;
				align-items:center;
				justify-content: space-between;
			
				transform-style: preserve-3d;
			}

			.logo {
				width:30%;
				height:350px;
				position: relative;
				border: 0;
				transform-style: preserve-3d;
				
				
			}

			.logo img{
				max-width:100%;
				position: absolute;
			 border-top-right-radius:30px ;
			 animation-name: bg;
				animation-fill-mode: forwards;
  	animation-iteration-count: infinite;
			animation-direction: alternate;
			animation-duration:2s;
			filter: brightness(0%);
			transform: translateZ(-2px);
	
			}


			@keyframes bg{
				0%{
					transform: translateZ(-1px);
					filter: brightness(30%);
				}100%{
					filter: brightness(100%);
					transform: translateZ(0px);
				}
			}
		</style>
</body>
</html>