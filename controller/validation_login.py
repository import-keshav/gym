from models import user_login


def validate(username_or_email, password, session):
	user_data, isValid = user_login.search_user(username_or_email, password)
	if(isValid):
		session['username'] = user_data['username']
		session['email'] = user_data['email']
		return user_data,True
	else:
		return False


def create(name,email,mobileNum,dateOfBirth,bmi,address,username,password):
	pass