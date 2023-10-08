<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Student Details</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/sweetalert2.min.css">
<link rel="stylesheet" href="css/sweet-alert.css">
</head>
<body>
  <h3><center>Student Details Form</center></h3>
    <div class="container background-color">
      <div class="container page-body-wrapper">
        <div class="content-wrapper"><br>
          <div class="row mb-3">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12 name mt-3">
              <div class="name-content px-1">
                <label for="FirstName"><strong>First Name</strong> <code>*</code></label>
                <input type="text" class="form-control input" placeholder="FirstName" id="FirstName" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12  name mt-3">
              <div class="name-content px-1">
                <label for="Lastname"><strong>Last Name</strong> <code>*</code></label>
                <input type="text" class="form-control input" id="Lastname" placeholder="Last Name" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12  name mt-3">
              <div class="name-content px-1">
                <label for="Email"><strong>Email</strong> <code>*</code></label>
                <input type="text" class="form-control input" id="Email" placeholder="Email" />
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12  name mt-3">
              <div class="name-content px-1">
                <label for="Batch"><strong>Class</strong><code>*</code></label>
                <input type="text" class="form-control input" id="Batch" placeholder="Batch/Class" />
              </div>
            </div>
          </div><hr>
          <!---->
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 mb-3">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <strong>Subjects</strong>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubEng" value="English" disabled />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubHindi" value="Hindi" disabled />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubMaths" value="Maths" disabled />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubSci" value="Science" disabled />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubHis" value="History" disabled  />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="SubGeo" value="Geography" disabled />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <strong>Marks</strong> <code>*</code>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12  mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value= this.value * -1}' id="MarksEng" placeholder="English Marks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value= this.value * -1}' id="MarksHin" placeholder="Hindi Marks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value= this.value * -1}' id="MarksMaths" placeholder="Maths Marks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value= this.value * -1}' id="MarksSci" placeholder="Science Marks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value=  this.value * -1}' id="MarksHis" placeholder="History Marks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="number" class="form-control input" onkeyup='if(this.value<0.00){this.value= this.value * -1}' id="MarksGeo" placeholder="Geography Marks"></input>
                  </div>
                </div>
              </div>	  
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <strong>Remarks</strong><code>*</code>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksEng" maxlength="150" placeholder="English Remarks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksHin" maxlength="150"  placeholder="Hindi Remarks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksMaths" maxlength="150"  placeholder="Maths Remarks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksSci" maxlength="150"  placeholder="Science Remarks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksHis" maxlength="150"  placeholder="History Remarks"></input>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input" id="remarksGeo" maxlength="150"  placeholder="Geography Remarks"></input>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-12"> 
                <button type="button" id="btnAddrecord" class="button" onclick="addrecord();">Add Record</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="js/validation.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/sweetAlert.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script type='text/javascript'>
$('input').blur(function()
{
var valplaceholder = $(this).attr("placeholder");
var vallblid = $(this).attr("id");
var valid = "err" + vallblid;
var valtext = "Please enter " + valplaceholder;
var check = $(this).val().trim();
var checkElementExists = document.getElementById(valid);
	if(check=='')
	{
		if(!checkElementExists)
		{
			$(this).parent().addClass('has-danger');
			$(this).after('<label id="' + valid + '" class="error mt-2 text-danger">'+valtext+'</label>');
		}

	}
	else
	{
		$(this).parent().removeClass('has-danger');  
		if (checkElementExists)
		{
			checkElementExists.remove();
		}
	}
});
function setErrorOnBlur(inputComponent)
{
var valplaceholder = $("#" +inputComponent).attr("placeholder");
var vallblid = $("#" +inputComponent).attr("id");
var valid = "err" + vallblid;
var valtext = "Please enter " + valplaceholder;
var check = $("#" +inputComponent).val().trim();
var checkElementExists = document.getElementById(valid);
	if(check=='')
	{
		if(!checkElementExists)
		{
			$("#" +inputComponent).parent().addClass('has-danger');
			$("#" +inputComponent).after('<label id="' + valid + '" class="error mt-2 text-danger">'+valtext+'</label>');
			$("#" +inputComponent).focus();

		}

	}
	else
	{
		$("#" +inputComponent).parent().removeClass('has-danger');  
		if (checkElementExists)
		{
			checkElementExists.remove();
		}
	}
}
function setError(inputComponent)
{
var valplaceholder = $(inputComponent).attr("placeholder");
var vallblid = $(inputComponent).attr("id");
var valid = "errSet" + vallblid;
var valtext = "Please enter valid " + valplaceholder;
var checkElementExists = document.getElementById(valid);
	if(!checkElementExists)
	{
		$("#" + vallblid).parent().addClass('has-danger');
		$("#" + vallblid).after('<label id="' + valid + '" class="error mt-2 text-danger">'+valtext+'</label>');
	}	
}
function removeError(inputComponent)
{
var vallblid = $(inputComponent).attr("id");
	$("#" + vallblid).parent().removeClass('has-danger');
	const element = document.getElementById("errSet"+vallblid);
	if (element)
	{
		element.remove();
	}
}

$("#Email").blur(function()
{
	removeError(Email);
	if ($("#Email").val()!="")
	{
		if(!validateEmail($("#Email").val())){
			setError(Email);
		}
		else
		{
			removeError(Email);
		}
	}
});

function addrecord(){
	
var EngMarks=$("#MarksEng").val();
var MarksHin=$("#MarksHin").val();
var MarksMaths=$("#MarksMaths").val();
var MarksSci=$("#MarksSci").val();
var MarksHis=$("#MarksHis").val();
var MarksGeo=$("#MarksGeo").val();

var Total=parseFloat(EngMarks)+parseFloat(MarksHin)+parseFloat(MarksMaths)+parseFloat(MarksSci)+parseFloat(MarksHis)+parseFloat(MarksGeo);

	if(Total>600){
		showAlert("warning","Obtained marks Cannot be greater than total marks.","warning");
	}
	else{
		if(!validateBlank($("#FirstName").val())){
			setErrorOnBlur("FirstName");	
		}
		else if(!validateBlank($("#Lastname").val())){
			setErrorOnBlur("Lastname");	
		}
		else if(!validateBlank($("#Email").val())){
			setErrorOnBlur("Email");	
		}
		else if(!validateEmail($("#Email").val())){
			setErrorOnBlur("Email");	
		}
		else if(!validateBlank($("#MarksEng").val())){
			setErrorOnBlur("MarksEng");	
		}
		else if(!validateBlank($("#MarksHin").val())){
			setErrorOnBlur("MarksHin");	
		}
		else if(!validateBlank($("#MarksMaths").val())){
			setErrorOnBlur("MarksMaths");	
		}
		else if(!validateBlank($("#MarksSci").val())){
			setErrorOnBlur("MarksSci");	
		}
		else if(!validateBlank($("#MarksHis").val())){
			setErrorOnBlur("MarksHis");	
		}
		else if(!validateBlank($("#MarksGeo").val())){
			setErrorOnBlur("MarksGeo");	
		}
		else if(!validateBlank($("#remarksEng").val())){
			setErrorOnBlur("remarksEng");	
		}
		else if(!validateBlank($("#remarksHin").val())){
			setErrorOnBlur("remarksHin");	
		}
		else if(!validateBlank($("#remarksMaths").val())){
			setErrorOnBlur("remarksMaths");	
		}
		else if(!validateBlank($("#remarksSci").val())){
			setErrorOnBlur("remarksSci");	
		}
		else if(!validateBlank($("#remarksHis").val())){
			setErrorOnBlur("remarksHis");	
		}
		else if(!validateBlank($("#remarksGeo").val())){
			setErrorOnBlur("remarksGeo");	
		}
		else if(!validateBlank($("#remarksGeo").val())){
			setErrorOnBlur("remarksGeo");	
		}
		else{   
			$.ajax({
				type:"POST",
				url:"apiAddStudentData.php",
				dataType:"JSON",
				data:{first_name:$("#FirstName").val(),last_name:$("#Lastname").val(),Email:$("#Email").val(),Batch:$("#Batch").val(),MarksEng:$("#MarksEng").val(),MarksHin:$("#MarksHin").val(),MarksMaths:$("#MarksMaths").val(),MarksSci:$("#MarksSci").val(),MarksHis:$("#MarksHis").val(),MarksGeo:$("#MarksGeo").val(),remarksEng:$("#remarksEng").val(),remarksHin:$("#remarksHin").val(),remarksMaths:$("#remarksMaths").val(),remarksSci:$("#remarksSci").val(),remarksHis:$("#remarksHis").val(),remarksGeo:$("#remarksGeo").val()},	
				success:function(response){
				var StuentID=response[0];
					if($.trim(response[0])!=""){
						showAlertRedirect("Success","Student Details Saved Successfully","success","pgStudentReport.php?id="+StuentID);
					}
					else if(response[1]=="Exists"){
						showAlert("warning","Student Already Exists.","warning");
					}
					else{
						showAlert("Error","Something Went Wrong. Please Try After Sometime.","error");
					} 
				}
			});
		 
		}
	}
}	
</script>	
</body>
</html>