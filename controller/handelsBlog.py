from models.CRUD_operations_blog import CreateBlog, getBlogs, updateblog, deleteblog

def createBlog(form, username):
	title = form.title.data
	content = form.content.data
	CreateBlog(title, content, username)

def getAllBlogs():
	blogs = getBlogs()
	return blogs

def updateBlog(new_title, new_content, username, blogId):
	updateblog(new_title, new_content, username, blogId)

def deleteBlog(blogId, username):
	deleteblog(blogId, username)