function validation()
{
	var fname=document.getElementById('fname1').value;
	var lname=document.getElementById('lname').value;
	var email=document.getElementById('email1').value;
	var username=document.getElementById('uname1').value;
	var pwd=document.getElementById('pwd1').value;

	if(fname=="")
	{
		document.getElementById('fname2').innerHTML="please enter firstname";
	}

	if(lname=="")
	{
		document.getElementById('lname2').innerHTML="please enter firstname";
	}

	if(email=="")
	{
		document.getElementById('email2').innerHTML="please enter firstname";
	}

	if(username=="")
	{
		document.getElementById('uname2').innerHTML="please enter firstname";
	}

	if(pwd=="")
	{
		document.getElementById('pwd2').innerHTML="please enter firstname";
	}
	if((fname.legnth>3)||(fname.legnth<20) )
	{
		document.getElementById('pwd2').innerHTML="please enter firstname";
	}
}