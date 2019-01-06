from flask import render_template , redirect , url_for
from models import user_login


def validate(username_or_email, password):
	if(user_login.search_user(username_or_email, password)):
		return redirect(url_for('home'))
	else:
		return "fail"


def create(name,email,mobileNum,dateOfBirth,bmi,address,username,password):
	pass