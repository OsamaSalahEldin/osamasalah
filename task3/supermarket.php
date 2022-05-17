<?php 





if($_POST){


$header = " <table class='self-header'><tr><td>product name</td><td>price</td><td>Quantities</td> </tr><table>";




	$name =$_POST['username'];

$city=$_POST['city'];

$quantities= $_POST['number'];







}
















?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SUPERMARKET</title>
</head>
<body>
	
<section>
	   
      <div class="container">
							       <div class="flexAll">

														       <div class="images"><img src="images/delivery-service-with-masks-concept_23-2148501936.webp"></div>
															      <div class="form">

                       <form action="" method="POST">
                                  
																							       <div>
                               <lable style="display:block; color:red;margin-bottom:10px;">username:</lable>
																													  <input type="text" name='username' value='<?php echo $name ??"" ?>'>
																												  </div>

																													 <div>

																														<lable style="display:block; color:red;margin-bottom:10px;">city</lable>
																														  <input list="cities" name="city" placeholder="portsaid" value="<?php echo  $city ?? ""  ?>">
																																				<datalist id="cities">
																																						<option value="Cairo">
																																						<option value="Giza">
																																						<option value="Alex">
																																						<option value="Other">																
																																				</datalist>

                               </div>
                                    
																															<div>
																														   	<lable style="display:block; color:red;margin-bottom:10px;">number of varietes</lable>
																																		<input type="number" name="number" id="" value='<?php echo $quantities ?? ""  ?>'>
																												 	</div>

																														<div class="submit">
																															     <button style="width:100%;border:0;padding:10px 0; background-color:red; cursor:pointer; font-size:18px;color:white;">enter products</button>
																														</div>

																														<?php if(isset($header)){echo $header; }; ?>
                              
																														<table>

																														<?php if(isset($quantities)){for($i=0; $i < $quantities ;$i++){?>
																													


                                <tr>

																																			<td><input type="text" name='productname' ></td>																			
																																			<td><input type="number" name='price' ></td>
																																			<td><input type="number" name='quantpro'></td>
						                          
																														</tr>
																												

																															<?php }}?>


																														

																														</table>	
																														<div><button name='presentation' style='width:100%; padding:10px; background-color:black; color:white; cursor:pointer;'>Receipt</button></div>
																													
                       	          
																					 		</form>
                     
																							
																							
																	

																					</div>
																
											
															</div>

													
																							

						</div>
   

					
																						
																							   
																							
</section>
 





<style>

*{
	box-sizing:border-box;
	margin:0;
	padding:0;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;

}

.lastTable th{
	color:red;

		border-bottom:1px solid red;
	padding:10px 20px;
}
.lastTable {

border-collapse: collapse;
margin-bottom: 20px;

}





form div{
	margin-bottom:25px;
}

section{
	position: relative;
	height:100vh;

}
.flexAll{
	display:flex;
	justify-content: space-between;
	align-items: center;
	position: absolute;
	width: 100%;
height: 100%;
	left:50%;
	top:50%;
	transform: translate(-50%,-50%);
}
.self-header {
	border-collapse: collapse;
  
}
.self-header tr td{
background-color: red;
padding:10px 46px;
color:white;
margin: 0;
}

table{
	border-collapse: collapse;
}
table tr {

	margin-right: 10px;
}

table tr td input{
width:160px;
font-size:12px;
height:60px;
}
table tr td {
margin-right: 7px;

display: inline-block;
margin-bottom: 10px;
margin-top: 3px;


}

.container{
	width:1124px;
	margin-right:auto;
	margin-left:auto;
	height:100%;
 position:relative;
	
}
.flexAll div.images{
width:33%;
	position: relative;


}
input{
	width:500px;
	height:30px;
	outline: 0;
	padding-left:5px;
	font-size:18px;
}
.flexAll div img{
	animation-name: x;
	animation-iteration-count: infinite;
	animation-duration: 0.2s;
	animation-direction: alternate;
	width:100%;
	position: relative;

}


@keyframes x {

0{
	top:2px;
}
100%{
	bottom:2px;
}





}
</style>


</body>
</html>