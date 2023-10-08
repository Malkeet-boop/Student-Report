<?php
include_once "function.php";
$sign=new Signup();
$first_name=$sign->escapeString($_POST["first_name"]);
$last_name=$sign->escapeString($_POST["last_name"]);
$Email=$sign->escapeString($_POST["Email"]);
$Batch=$sign->escapeString($_POST["Batch"]);
$MarksEng=$sign->escapeString($_POST["MarksEng"]);
$MarksHin=$sign->escapeString($_POST["MarksHin"]);
$MarksMaths=$sign->escapeString($_POST["MarksMaths"]);
$MarksSci=$sign->escapeString($_POST["MarksSci"]);
$MarksHis=$sign->escapeString($_POST["MarksHis"]);
$MarksGeo=$sign->escapeString($_POST["MarksGeo"]);
$remarksEng=$sign->escapeString($_POST["remarksEng"]);
$remarksHin=$sign->escapeString($_POST["remarksHin"]);
$remarksMaths=$sign->escapeString($_POST["remarksMaths"]);
$remarksSci=$sign->escapeString($_POST["remarksSci"]);
$remarksHis=$sign->escapeString($_POST["remarksHis"]);
$remarksGeo=$sign->escapeString($_POST["remarksGeo"]);
$exists="";
$StudentID="";

$qryselcount="Select count(*) as cnt from student_details where email='".$Email."'";
$StudentCnt = $sign->Select($qryselcount);
if($StudentCnt>1){
  $exists="Exists";
}
else{
  $InsertStudentdetails="insert into student_details (first_name,last_name,class,email,English,Hindi,Maths,Science,History,Geography,eng_remarks,hindi_remarks,maths_remarks,science_remarks,history_remarks,geo_remarks) values('".$first_name."','".$last_name."','".$Batch."','".$Email."','".$MarksEng."','".$MarksHin."','".$MarksMaths."','".$MarksSci."','".$MarksHis."','".$MarksGeo."','".$remarksEng."','".$remarksHin."','".$remarksMaths."','".$remarksSci."','".$remarksHis."','".$remarksGeo."')";
  $StudentID = $sign->FunctionQuery($InsertStudentdetails,true);
}

$responsearray=array();
array_push($responsearray,$StudentID,$exists);
echo json_encode($responsearray);
?>
