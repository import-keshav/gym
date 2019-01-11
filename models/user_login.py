import pymongo


def search_user(username_or_email, password):
	client = pymongo.MongoClient()
	database = client['stay-fit']
	collection = database['user_primary_info']
	username_or_email = str(username_or_email)
	password = str(password)
	for x in collection.find({ "$or": [	{"username": username_or_email} , {"email": username_or_email} ] }):
		if(x['password'] == password):
			user_data = x
			return user_data,True
		else:
			return "NO USER",False