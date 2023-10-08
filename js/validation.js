function validateEmail(inputText) 
{
	if (inputText.trim()=="")
	{
		return false;
	}
	else
	{
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(inputText);
	}
}
function validateBlank(inputText) 
{
	
	if (inputText.trim()=="")
	{
		return false;
	}
	else
	{
		return true;
	}
}
