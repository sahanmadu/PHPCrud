function validationM()
{
	
	var hName=document.getElementById('hospitaname').value;
	var hAddress=document.getElementById('hospitaladdress').value;
	var hemail=document.getElementById('hospitalemail').value;
	var hNoofrooms=document.getElementById('noofrooms').value;
	var tele=document.getElementById('teleno').value;



	
	if(hName=="")
	{
		document.getElementById('hname1').innerHTML="please enter name";
		return false;
	}

	if(hAddress=="")
	{
		document.getElementById('haddress1').innerHTML="please enter address";
		return false;
	}

	if(hemail=="")
	{
		document.getElementById('hemail1').innerHTML="please enter email";
		return false;
	}

	
	if(hNoofrooms=="")
	{
		document.getElementById('hroom').innerHTML="please enter no of rooms";
		return false;
	}

	if(tele=="")
	{
		document.getElementById('hno').innerHTML="please enter telephone number";
		return false;
	}
	if((fname.legnth>3)||(fname.legnth<20) )
	{
		document.getElementById('hno').innerHTML="please enter firstname";
		return false;
	}

	
}