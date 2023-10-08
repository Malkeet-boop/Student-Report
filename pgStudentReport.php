<?php
if(!isset($_REQUEST["id"])){
	header("Location:pgStudentDetailsForm.php");
}
include_once "function.php";
$sign=new Signup();

date_default_timezone_set("Asia/Kolkata");
$cur_date=date("d-m-Y");

$student_id=$_REQUEST["id"]; 


$querypo="Select first_name,last_name,class as standard,email,English,Hindi,Maths,Science,History,Geography,eng_remarks,hindi_remarks,maths_remarks,science_remarks,history_remarks,geo_remarks from student_details where id='".$student_id."'";
$DocValpo = $sign->FunctionJSON($querypo);
$decodedJSON = json_decode($DocValpo);
$first_name = $decodedJSON->response[0]->first_name; 
$last_name = $decodedJSON->response[1]->last_name; 
$standard = $decodedJSON->response[2]->standard; 
$email = $decodedJSON->response[3]->email; 
$English = $decodedJSON->response[4]->English; 
$Hindi = $decodedJSON->response[5]->Hindi; 
$Maths = $decodedJSON->response[6]->Maths; 
$Science = $decodedJSON->response[7]->Science; 
$History = $decodedJSON->response[8]->History; 
$Geography = $decodedJSON->response[9]->Geography; 
$eng_remarks = $decodedJSON->response[10]->eng_remarks; 
$hindi_remarks = $decodedJSON->response[11]->hindi_remarks; 
$maths_remarks = $decodedJSON->response[12]->maths_remarks; 
$science_remarks = $decodedJSON->response[13]->science_remarks; 
$history_remarks = $decodedJSON->response[14]->history_remarks; 
$geo_remarks = $decodedJSON->response[15]->geo_remarks; 

$total=0.00;
$percentage=0.00;
$finalTotal=600;
$Grade ="";
$total=floatval($English)+floatval($Hindi)+floatval($Maths)+floatval($Science)+floatval($History)+floatval($Geography);

$percentage=($total/$finalTotal)*100;

if($percentage>0.00 && $percentage<=33){
	$Grade="Fail";
}
else if($percentage>=33 && $percentage<=59){
	$Grade="Pass";
}
else if($percentage>=60 && $percentage<=74.00){
	$Grade="First Class";
}
else if($percentage>=75 && $percentage<=100.00){
	$Grade="Distinction";
}
	
?>

<html>
<head>
<title>Purchase Order</title>
<link rel="stylesheet" href="css/styletable.css">
</head>
<body>

	<table>
		<tr>
		  <center><h1>Student Report</h1></center>
		  <center><h3>Student Name: <?php echo $last_name." ".$first_name;?></h3></center>
		</tr>
		
	</table>
		<table align="center">
		  <tr>
			<td colspan="2"><strong>Student Email: </strong><?php echo $email;?></td>
			<td colspan="2"><strong>Standard: </strong><?php echo $standard;?></td>
			<td colspan="2"><strong>Date: </strong><?php echo $cur_date;?></td>
		  </tr>
		  <tr class="textbold">
			<td class="textcenter" >#</td>
			<td class="textcenter">Subjects</td>
			<td class="textcenter">Total Marks</td>
			<td class="textcenter">Marks Obtained</td>
			<td class="textcenter">Remarks</td>
		  </tr>
		  <tr>
			<td class="textbold textcenter">1</td>
			<td class="textbold textcenter">English</td>
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $English ?></td>
			<td class="textcenter"><?php echo $eng_remarks; ?></td>
		  </tr>
		  <tr>
			<td class="textbold textcenter">2</td>
			<td class="textbold textcenter">Hindi</td>			
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $Hindi ?></td>
			<td class="textcenter"><?php echo $hindi_remarks; ?></td>
		  </tr> 
		  <tr>
			<td class="textbold textcenter">3</td>
			<td class="textbold textcenter">Maths</td>
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $Maths ?></td>
			<td class="textcenter"><?php echo $maths_remarks; ?></td>
		  </tr> 
		  <tr>
			<td class="textbold textcenter">4</td>
			<td class="textbold textcenter">Science</td>
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $Science ?></td>
			<td class="textcenter"><?php echo $science_remarks; ?></td>
		  </tr> 
		  <tr>
			<td class="textbold textcenter">5</td>
			<td class="textbold textcenter">History</td>
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $History ?></td>
			<td class="textcenter"><?php echo $history_remarks; ?></td>
		  </tr> 
		  <tr>
			<td class="textbold textcenter">6</td>
			<td class="textbold textcenter">Geography</td>
			<td class="textbold textcenter">100.00</td>
			<td class="textcenter"><?php echo $Geography ?></td>
			<td class="textcenter"><?php echo $geo_remarks; ?></td>
		  </tr>
		  <tr>
			<td class="textbold textcenter" colspan="2">Total</td>
			<td class="textbold textcenter" >600.00</td>
			<td class="textcenter"><?php echo number_format(round($total,2),2); ?></td>
			<td class="textcenter"></td>
			
		  </tr>
		</table><br>
		<?php
		
		?>
	
		<table align="center">
		  <tr> 
			<th>Grade: <?php echo $Grade;?></th>
			<th>Percentage: <?php echo number_format(round($percentage,2),2)."%";?></th>
		  </tr>
		</table>
	

</body>
<html>