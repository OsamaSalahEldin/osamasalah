<?php

?>





<section id="secOne">



<form method="POST">

							<div>
								<input type="number" name="num1" id="NUM1" placeholder="أدخل الرقم الأول ">
							</div>  

					 	<div>
					   	<input type="number" name="num2" id="NUM2" placeholder="أدخل الرقم الثاني ">
						</div>
						<div class="flexAll">

									<input type="submit" name = "sum" value="+">
									<input type="submit" name="sub" value="-"> 
									<input type="submit" name="division" value="/">
									<input type="submit" name="other" value="%">
									<input type="submit" name="multi" value="*">
         
						</div>
						<div class="res"> 

						  <?php
								if(isset($_POST['sum'])) {

           echo $_POST['num1'] + $_POST['num2'];
											

								}elseif(isset($_POST['sub'])) {

									echo $_POST['num1'] - $_POST['num2'];
									

					  	}
								elseif(isset($_POST['division'])) {

									echo $_POST['num1'] / $_POST['num2'];
									

						  }

								elseif(isset($_POST['other'])) {

									echo $_POST['num1'] % $_POST['num2'];
									

						  }

								elseif(isset($_POST['multi'])) {

									echo $_POST['num1'] % $_POST['num2'];
									

						  }


								?>
						</div>
       

						<?php











	

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

.res{
	width:93%;
	height:20px;
	padding:10px;
	background-color:#0072ff ;
	color:white;
	text-align:center;
}

form input[type=submit]{
	display:inline-block;
	width:20%;
}


#secOne form{
width:30%;
position: relative;
padding-top: 100px;
margin-left: auto;
margin-right: auto;
position: relative;
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
font-family: 'Times New Roman', Times, serif;
}

button{
display:inline-block;
margin-top:10px;
width:100%;
height:50px;
font-size: 18px;
background-color: #000000b0;
border-radius: 2px;
outline:none;
border: 0;
color:white;
font-weight: bold;
cursor: pointer;

margin-bottom: 30px;
}

.flexAll{
	display:flex;
 justify-content: space-around;

}
.flexAll input{
	width:5%;
	display:block;
	background-color: red;
	color: white;
	padding: 5px;
	cursor: pointer;
	outline: none;
	border:0;
	margin-right: 2px;
margin-top: 5px;
font-size: 16px;


}




</style>








</body>
</html>



