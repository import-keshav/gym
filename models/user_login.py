import pymongo


def search_user(username_or_email, password):
	client = pymongo.MongoClient()
	database = client['stay-fit']
	collection = database['user_primary_info']
	username_or_email = str(username_or_email)
	password = str(password)
	count = collection.count_documents( 
		{
			"$and": 
				[
					{
						"$or": [	{"name": username_or_email} , {"email": username_or_email} ]
					},
					
					{ "password": password}

				]
		}
	)
	if(count == 1):
		return 1
	else:
		return 0
