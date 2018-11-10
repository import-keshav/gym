function check_name_method()
	{
		var x=document.getElementById('1');
		var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?1234567890]/;
		var check = format.test(x.value)
		if(check==true)
			{

				document.getElementById("11").innerHTML="name should only contains letters";
				document.getElementById("submit_button").disabled=true;
				return;
			}
		else
			{
			  document.getElementById('signup_template').style.height="620px";
				document.getElementById("submit_button").disabled=false;
				document.getElementById("11").innerHTML="";
				return;
			}
	}
function name_method()
	{
		document.getElementById('1').addEventListner('input',check_name_method())
	}







function check_date_method()
	{
		var x=document.getElementById('4');
		var y=new Date();
		var dd = y.getDate();
		var mm = y.getMonth() + 1;
		var yyyy = y.getFullYear();

		if(Number(x.value.slice(0,4))>Number(yyyy) || (x.value[4]!='/' && x.value.length==5) || isNaN(Number(x.value.slice(0,4))))
			{

				document.getElementById("44").innerHTML="invalid year";
				document.getElementById("submit_button").disabled=true;
				return
			}
		else if((Number(x.value.slice(5,7))>Number(mm) && Number(x.value.slice(0,4))<=Number(yyyy)) || Number(x.value.slice(5,7)>12) || (x.value[7]!='/' && x.value.length==8) || isNaN(Number(x.value.slice(5,7))))
			{

				document.getElementById("44").innerHTML="invalid month";
				document.getElementById("submit_button").disabled=true;
				return
			}
		else if(Number(x.value.slice(8,10))>Number(dd) && Number(x.value.slice(5,7))<=Number(mm) && Number(x.value.slice(0,4))<=Number(yyyy) || isNaN(Number(x.value.slice(8,10))) || Number(x.value.slice(8,10))>31)
			{

				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("submit_button").disabled=true;
				return
			}
			else if((Number(x.value.slice(5,7))==4 || Number(x.value.slice(5,7))==6 || Number(x.value.slice(5,7))==9 ||  Number(x.value.slice(5,7))==11) && Number(x.value.slice(8,10))>30)
			{

				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("submit_button").disabled=true;
				return;
			}
			else if((Number(x.value.slice(5,7))==1 || Number(x.value.slice(5,7))==3 || Number(x.value.slice(5,7))==5 ||  Number(x.value.slice(5,7))==7 ||  Number(x.value.slice(5,7))==8 ||  Number(x.value.slice(5,7))==10 ||  Number(x.value.slice(5,7))==12) && Number(x.value.slice(8,10))>31)
			{

				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("submit_button").disabled=true;
				return;
			}
			else if((Number(x.value.slice(5,7))==2 && Number(x.value.slice(0,4))%4==0 && Number(x.value.slice(8,10))>29) ||
			(Number(x.value.slice(5,7))==2 && Number(x.value.slice(0,4))%4!=0 && Number(x.value.slice(8,10))>28) )
			{

				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("submit_button").disabled=true;
				return;
			}
		else
			{
				document.getElementById("44").innerHTML=""
				document.getElementById("submit_button").disabled=false;
			}
		}

function date_method()
	{
		document.getElementById('4').addEventListner("input",check_date_method());
	}






function check_email_method()
	{
		var x = document.getElementById('3');
		var format = /[!#$%^&*()_+\-=\[\]{};':"\\|,<>\/?]/;
		if(x.value.length==0)
			{
				document.getElementById('33').innerHTML="";
				document.getElementById("submit_button").disabled=false;
			}
		if(format.test(x.value))
			{

				document.getElementById('33').innerHTML="invalid email";
				document.getElementById("submit_button").disabled=true;
				return;
			}
		else if(x.value.indexOf('@')<1  || x.value.indexOf('.')>=x.value.length-2 || (x.value.indexOf('.') -x.value.indexOf('@')<3))
		{

			document.getElementById('33').innerHTML="invalid email";
			document.getElementById("submit_button").disabled=true;
			return;
		}
		else
		{
			document.getElementById('33').innerHTML="";
			document.getElementById("submit_button").disabled=false;
			return;
		}
	}

function email_method()
	{

		var str = document.getElementById("3").value;
		var req = new XMLHttpRequest();
		req.open("GET" , "http://localhost/gym/php/checking_email.php?email=" + str , true);
		req.send();
		req.onreadystatechange = function()	{
				if(req.readyState==4 && req.status==200)
					{

					}
		}
		document.getElementById('3').addEventListner("input",check_email_method());
	}






function check_bmi_method()
	{
		var x=document.getElementById('5');
		if(isNaN(Number(x.value)) || Number(x.value)>50)
			{

				document.getElementById('55').innerHTML="invalid bmi ";
				document.getElementById("submit_button").disabled=true;
				return
			}
		else
			{
				document.getElementById('55').innerHTML="";
				document.getElementById("submit_button").disabled=false;
				return;
			}
	}

function bmi_method()
	{
		document.getElementById('5').addEventListner("input",check_bmi_method());
	}









function 	check_password()
	{
		var x=document.getElementById('6');
		var letterNumber = /^[0-9]+$/;
		if(x.value.length<8)
			{

				document.getElementById('password').innerHTML="min. 8 characters";
			}
		else if(x.value.length>=8)
			{
				document.getElementById('password').innerHTML="weak password";
				var format1 = /[0123456789]/;
				var format2 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
				var format3 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0123456789]/;
				if(format1.test(x.value))
					{
						document.getElementById('password').innerHTML="";

						document.getElementById('password').innerHTML="medium password";
					}
				if(format2.test(x.value))
					{
						document.getElementById('password').innerHTML="";

						document.getElementById('password').innerHTML="strong password";
					}
				if(format3.test(x.value))
					{
						document.getElementById('password').innerHTML="";

						document.getElementById('password').innerHTML="strong password";
					}
			}
	}

function password_method()
	{
		document.getElementById('6').addEventListner("input",check_password());
	}

function confirm_password()
	{
		document.getElementById('password').innerHTML="";
	}

function checking_mobile_num()
	{
		var x=document.getElementById('7');
		var format = /[!#$%^&*()_+\-=\[\]{};':"\\|,<>\/?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/;
		if(x.value.length == 0)
			{
				document.getElementById("submit_button").disabled=true;
			}
		if(format.test(x.value))
			{
				document.getElementById("submit_button").disabled=true;
				document.getElementById("mobile_no").innerHTML = "Invalid Mobile No."

			}
	}

function check_mobile_num()
	{
		document.getElementById('7').addEventListner("input",checking_mobile_num());
	}


function checked_mobile_num()
	{
		document.getElementById("mobile_no").innerHTML = "";
		document.getElementById("submit_button").disabled=false;
	}
