import pymongo
import hashlib

client = pymongo.MongoClient()
database = client['stay-fit']
collection = database['blogs']

def CreateBlog(title, content, username):
	for x in collection.find({"username": username}):
		blogs = x['blogs']
	new_blog = {"title": title, "content": content, "id": hashlib.sha256(content.encode()).hexdigest(), "by": username}
	blogs.append(new_blog)
	collection.update({"username": username}, {"$set": {"blogs": blogs} })

def getBlogs():
	blogs = []
	for x in collection.find():
		blogs += x['blogs']
	return blogs

def updateblog(new_title, new_content, username, blogId):
	for x in collection.find({"username": username}):
		blogs = x['blogs']
	for blog in blogs:
		if(blog['id'] == blogId):
			blog['title'] = new_title
			blog['content'] = new_content
			break
	collection.update({"username": username} , {"$set": {"blogs": blogs} })

def deleteblog(blogId, username):
	for x in collection.find({"username": username }):
		blogs = x['blogs']
	for blog in blogs:
		if(blog['id'] == str(blogId)):
			blogs.remove(blog)
			break
	collection.update({"username": username} , {"$set": {"blogs": blogs} })