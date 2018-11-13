function check_name_method()
	{
		var x=document.getElementById('1');
		var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?1234567890]/;
		var check = format.test(x.value)
		if(x.value=="")
			{
				document.getElementById("11").innerHTML="";
				document.getElementById("next_button_1").disabled=false;
				document.getElementById('not_fill_1').innerHTML="";
			}
		if(check==true)
			{
				document.getElementById("11").innerHTML="name should only contains letters";
				document.getElementById("next_button_1").disabled=true;
				document.getElementById('not_fill_1').innerHTML="";
			}
		else
			{
				document.getElementById("next_button_1").disabled=false;
				document.getElementById('not_fill_1').innerHTML="";
			}
	}

function name_method()
	{
		document.getElementById('1').addEventListner('input',check_name_method())
		document.getElementById('not_fill_1').innerHTML="";
		document.getElementById("next_button_1").disabled=false;
	}

function confirm_name()
	{
		document.getElementById("next_button_2").disabled=false;
	}







function check_email_method()
	{
		var x = document.getElementById('3');
		var format = /[!#$%^&*()_+\-=\[\]{};':"\\|,<>\/?]/;
		var check = format.test(x.value)
		if(x.value=="")
			{
				document.getElementById('33').innerHTML="";
				document.getElementById("next_button_1").disabled=false;
				document.getElementById('not_fill_1').innerHTML="";
			}
		if(check==true)
			{
				document.getElementById('33').innerHTML="invalid email";
				document.getElementById("next_button_1").disabled=true;
				document.getElementById('not_fill_1').innerHTML="";
			}
		else if(x.value.indexOf('@')<1  || x.value.indexOf('.')>=x.value.length-2 || (x.value.indexOf('.') -x.value.indexOf('@')<3))
			{
				document.getElementById('33').innerHTML="invalid email";
				document.getElementById("next_button_1").disabled=true;
				document.getElementById('not_fill_1').innerHTML="";
			}
		else
			{
				document.getElementById('33').innerHTML="";
				document.getElementById("next_button_1").disabled=false;
				document.getElementById('not_fill_1').innerHTML="";
			}
	}

function email_method()
	{
		document.getElementById('3').addEventListner("input",check_email_method());
	}





function checking_mobile_num()
	{
		var x=document.getElementById('7');
		var format = /[!#$%^&*()_+\-=\[\]{};':"\\|,<>\/?abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/;
		var check = format.test(x.value)
		if(x.value=="")
			{
				document.getElementById("next_button_1").disabled=false;
				document.getElementById("mobile_no").innerHTML = "";
				document.getElementById('not_fill_1').innerHTML="";
			}
		if(check==true)
			{
				document.getElementById("next_button_1").disabled=true;
				document.getElementById("mobile_no").innerHTML = "Invalid Mobile No.";
				document.getElementById("signup_template_1").style.height="360px";
				document.getElementById('not_fill_1').innerHTML="";
			}
		if(x.value.length>10)
			{
				document.getElementById("next_button_1").disabled=true;
				document.getElementById("mobile_no").innerHTML = "Invalid Mobile No.";
				document.getElementById("signup_template_1").style.height="360px";
				document.getElementById('not_fill_1').innerHTML="";
			}
		else
			{
				document.getElementById("next_button_1").disabled=false;
				document.getElementById("mobile_no").innerHTML = "";
				document.getElementById('not_fill_1').innerHTML="";
			}
	}

function mobile_method()
	{
		document.getElementById('7').addEventListner("input",checking_mobile_num());
	}






function check_date_method()
	{
		var x=document.getElementById('4');
		var y=new Date();
		var dd = y.getDate();
		var mm = y.getMonth() + 1;
		var yyyy = y.getFullYear();
		if(x.value == "")
			{
				document.getElementById("44").innerHTML="";
				document.getElementById('not_fill_2').innerHTML="";
			}
		if(Number(x.value.slice(0,4))>Number(yyyy) || (x.value[4]!='/' && x.value.length==5) || isNaN(Number(x.value.slice(0,4))))
			{
				document.getElementById("44").innerHTML="invalid year";
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
				return
			}
		else if((Number(x.value.slice(5,7))>Number(mm) && Number(x.value.slice(0,4))<=Number(yyyy)) || Number(x.value.slice(5,7)>12) || (x.value[7]!='/' && x.value.length==8) || isNaN(Number(x.value.slice(5,7))))
			{
				document.getElementById("44").innerHTML="invalid month";
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
				return
			}
		else if(Number(x.value.slice(8,10))>Number(dd) && Number(x.value.slice(5,7))<=Number(mm) && Number(x.value.slice(0,4))<=Number(yyyy) || isNaN(Number(x.value.slice(8,10))) || Number(x.value.slice(8,10))>31)
			{
				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
				return
			}
			else if((Number(x.value.slice(5,7))==4 || Number(x.value.slice(5,7))==6 || Number(x.value.slice(5,7))==9 ||  Number(x.value.slice(5,7))==11) && Number(x.value.slice(8,10))>30)
			{
				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
			}
			else if((Number(x.value.slice(5,7))==1 || Number(x.value.slice(5,7))==3 || Number(x.value.slice(5,7))==5 ||  Number(x.value.slice(5,7))==7 ||  Number(x.value.slice(5,7))==8 ||  Number(x.value.slice(5,7))==10 ||  Number(x.value.slice(5,7))==12) && Number(x.value.slice(8,10))>31)
			{
				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
			}
			else if((Number(x.value.slice(5,7))==2 && Number(x.value.slice(0,4))%4==0 && Number(x.value.slice(8,10))>29) ||
			(Number(x.value.slice(5,7))==2 && Number(x.value.slice(0,4))%4!=0 && Number(x.value.slice(8,10))>28) )
			{
				document.getElementById("44").innerHTML="invalid day"
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
			}
		else
			{
				document.getElementById("44").innerHTML=""
				document.getElementById("next_button_2").disabled=false;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="354px";
			}
		}

function date_method()
	{
		document.getElementById('4').addEventListner("input",check_date_method());
	}




function check_bmi_method()
	{
		var x=document.getElementById('5');
		if(isNaN(Number(x.value)) || Number(x.value)>50)
			{
				document.getElementById('55').innerHTML="invalid bmi ";
				document.getElementById("next_button_2").disabled=true;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="380px";
				return
			}
		else
			{
				document.getElementById('55').innerHTML="";
				document.getElementById("next_button_2").disabled=false;
				document.getElementById('not_fill_2').innerHTML="";
				document.getElementById("signup_template_2").style.height="354px";
			}
	}

function bmi_method()
	{
		document.getElementById('5').addEventListner("input",check_bmi_method());
	}









function check_password()
	{
		var x=document.getElementById('5');
		if(x.value=="")
			{
				document.getElementById('password').innerHTML="";
			}
		if(x.value.length<8)
			{
				document.getElementById('password').innerHTML="min. 8 characters";
			}
		if(x.value.length>=8)
			{
				var format1 = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/;
				var format2 = /[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789]/;
				var format3 = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/;
				if(format1.test(x.value))
					{
						document.getElementById('password').innerHTML="weak password";
					}
				if(format2.test(x.value))
					{
						document.getElementById('password').innerHTML="medium password";
					}
				if(format3.test(x.value))
					{
						document.getElementById('password').innerHTML="strong password";
					}
				else
					{
						document.getElementById('password').innerHTML="";
					}
			}
	}

function password_method()
	{
		document.getElementById('5').addEventListner("input",check_password());
	}





function go_template_2()
	{
		if(document.getElementById('1').value=="" || document.getElementById('3').value=="" || document.getElementById('7').value=="")
			{
				document.getElementById('not_fill_1').innerHTML = "Fill all the values properly";
				document.getElementById("next_button_1").disabled=true;
				document.getElementById("signup_template_1").style.height="380px";	
			}
		else
			{
				document.getElementById("next_button_1").disabled=false;
				document.getElementById("dot_1_2").style.background = "#0074D9";
				document.getElementById("dot_2_2").style.background = "#001f3f";
				document.getElementById("dot_3_2").style.background = "#0074D9";
				document.getElementById("signup_template_1").style.height="354px";
				document.getElementById("signup_template_1").style.visibility = "hidden";
				document.getElementById("signup_template_2").style.visibility = "visible";
				document.getElementById("signup_template_2").style.top = "-275px";
				document.getElementById("signup_template_2").style.position = "relative"
				
			}
	}

function go_template_3()
	{
		if(document.getElementById('4').value=="" || document.getElementById('5').value=="" || document.getElementById('6').value=="")
			{
				document.getElementById('not_fill_2').innerHTML = "Fill all the values properly";
				document.getElementById("next_button_2").disabled=true;
				document.getElementById("signup_template_2").style.height="380px";	
			}
		else
			{
				document.getElementById("signup_template_2").style.height="354px";
				document.getElementById("next_button_2").disabled=false;
				document.getElementById("signup_template_2").style.visibility = "hidden";
				document.getElementById("signup_template_3").style.visibility = "visible";
				document.getElementById("signup_template_3").style.position = "relative"
				document.getElementById("signup_template_3").style.top = "-628px";
				document.getElementById("dot_1_3").style.background = "#0074D9";
				document.getElementById("dot_2_3").style.background = "#0074D9";
				document.getElementById("dot_3_3").style.background = "#001f3f";
			}
	}