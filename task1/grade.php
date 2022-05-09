


<?php

?>





<section id="secOne">



<form method="POST">

			<div>
			<label for="NUM1" >Chemistry</label>
				<input type="number" name="num1" id="NUM1">
			</div>  

						<div>
						<label for="NUM2">Biology</label>
						<input type="number" name="num2" id="NUM2">
						</div>

						<div>
						<label for="NUM3">Mathematics</label>
						<input type="number" name="num3" id="NUM3">
      </div> 

      <div>
						<label for="NUM4"> Computer</label>
						<input type="number" name="num4" id="NUM4">
      </div>

						<div>
						<label for="NUM5">Physics </label>
						<input type="number" name="num5" id="NUM45">
     </div>

						<button type="sumit">result </button>



						<?php








if($_POST){
	define("totalGrade", 500 );

$num1 =$_POST['num1'];   
$num2 =$_POST['num2'];  
$num3 =$_POST['num3'];
$num4 =$_POST['num4'];  
$num5 =$_POST['num5'];	

$total =( $num1 + $num2 )+ ($num3 + $num4) + $num5;

if( $total <= (totalGrade /2) ){


 echo "your grade is " .$total  / totalGrade *100 ."% failed"  ;


}

elseif($total > totalGrade /2  + totalGrade /2  )  {

	echo " please enter you true grade " ;


}





elseif($total > totalGrade /2  ){

	echo "your grade is " .  $total  / totalGrade *100  . "%  success " ;


}



elseif(totalGrade == ""  ){

	echo "your grade is " .  $total  / totalGrade *100 . "%  success " ;


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
margin-bottom: 30px;
}
</style>








</body>
</html>



