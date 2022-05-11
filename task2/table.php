<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female






$users = [
	(object)[
		  
					'id' => 1,
					'name' => 'ahmed',
					"gender" => (object)[
									'gender' => 'm'
					],
					'hobbies' => [
									'football', 'swimming', 'running'
					],
					'activities' => [
									"school" => 'drawing',
									'home' => 'painting'
					], 
	],
	(object)[
		  
					'id' => 2,
					'name' => 'mohamed',
					"gender" => (object)[
									'gender' => 'm'
					],
					'hobbies' => [
									'swimming', 'running',
					],
					'activities' => [
									"school" => 'painting',
									'home' => 'drawing'
					],
	],
	(object)[
	   
					'id' => null,
					'name' => 'menna',
					"gender" => (object)[
									'gender' => 'f'
					],
					'hobbies' => [
									'running',
					],
					'activities' => [
									"school" => 'painting',
									'home' => 'drawing'
					]
	],  



	(object)[
		  
		'id' => 2,
		'name' => 'mohamed',
		"gender" => (object)[
						'gender' => 'm'
		],
		'hobbies' => [
						'swimming', 'running',
		],
		'activities' => [
						"school" => 'painting',
						'home' => 'drawing',
						
		]
	
		],
		(object)[
		  
			'id' => 3,
			'name' => 'yasser',
			"gender" => (object)[
							'gender' => 'm'
			],
			'hobbies' => [
							'swimming', 'running',
			],
			'activities' => [
							"school" => 'painting',
							'home' => 'drawing',
							
			]
		
		]

];




$counter =count($users);

// if you want add column you should first add the name here 
$titleColumn =["id","name","gender","hobbies","activities"];
$counTitle=count($titleColumn);



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
	



  <section class="container">
	                  
		          
        <table class="table" >
									  <thead>
									      <tr>      
										   		<?php   echo" <th colspan=\" {$counTitle}\"><span class='logo-design'>NTI<span></th>"    ?> 
												 	</tr>
											</thead>

											<tbody>
											<tr class="title"> 
             
											 <?php foreach ($titleColumn as $value) {?>		

               <td><?php echo $value ?></td>
											
													<?php }?>


										</tr>
									

										<?php foreach ($users as $property => $value){?>

              
											<tr>
              
											   
																	<td ><?php echo $users[$property]->id?> </td>
																	<td ><?php echo $users[$property]->name?> </td>
																	<td ><?php 
																	       if($users[$property]->gender->gender == "m")
																         echo	 "male";
																									else{
																										echo	 "female";
																									}
																		?> 
																		</td>		
																	<td> <?php foreach($users[$property]->hobbies as $key => $value){echo $value ."<br>"; }?>   </td>
																	<td><?php foreach(  $users[$property]->activities as $value){	echo  $value."<br>";	};	?></td> 
																	
																
												
																 <?php
														
																	?>
													
											</tr>		

										

										<?php }?>


											</tbody>
              

								</table>

 

<?php 


?>


		 </section>




 <style>
		  .table{
					table-layout: fixed;
     border-collapse: collapse;
					width:100%;
					margin-top: 100px;
					text-align: center;
					box-shadow: 3px 3px 20px #ff790440,-3px -3px 20px #ff790440;
					line-height: 1.7;
				}
    section{
					width:1140px;
					margin-left: auto;
					margin-right: auto;
				}

				.table tr td{
					padding : 10px 0  10px ;
					font-size: 20px;
					background-color:#e3e3e3 ;
					color: blue;
					font-family: Arial, Helvetica, sans-serif;
				}

				.title  td{
					color:#ff7904 !important;
					font-weight:bold;
					background-color: black;
				}
				.title td {
				
					background-color: black !important;
					border:0 !important
				}

				thead th{
					padding:18px 0 18px;
					background-color: black;
					color: white;
					font-size: 20px;
					font-family: Arial, Helvetica, sans-serif;
					letter-spacing: 5px;
					background-image: url("images/logo.png");
					background-repeat: no-repeat;
				
		
				}
				thead th  {
					column-span:all ;
	
		
				}
				.logo-design{
				   display: inline-block;
							padding: 10px;
							margin-top: 5px;
							box-shadow: 2px 2px 10px #ff7904a8,-2px -2px 10px #ff7904a8;
					cursor: all-scroll;
					font-size: 16px;
				}


				tbody td{
            border:1px dotted #ff7904 ;
				}
	</style>











</body>
</html>