from flask import render_template

def validate(username_or_email, password):
	if(username_or_email == "keshav" and password == "123"):
		return "true"
	else:
		return "false"


def create(name,email,mobileNum,dateOfBirth,bmi,address,username,password):
	return "Yes"