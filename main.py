from flask import Flask , render_template , request, redirect, url_for, session
from controller.validation_login import validate
from controller.handelsBlog import createBlog, getAllBlogs, updateBlog, deleteBlog
from services.forms import CreateBlog
import json

app = Flask(__name__)
app.config["SECRET_KEY"] = 'keshav'

@app.route("/")
def login_signup():
    return render_template('login.html')


@app.route("/loginValidation", methods=["POST"])
def loginValidation():
    username_or_email = str(request.form["username"])
    password = str(request.form["password"])
    isValid = validate(username_or_email, password, session)
    if isValid:
        return redirect(url_for('home'))
    else:
        pass


@app.route("/createNewAccount", methods=["POST"])
def newAccount():
    name = str(request.form["name"])
    email = str(request.form["email"])
    mobileNum = str(request.form["mobileNum"])
    dateOfBirth = str(request.form["date"])
    bmi = str(request.form["bmi"])
    address = str(request.form["address"])
    username = str(request.form["username"])
    password = str(request.form["password"])
    create(name, email, mobileNum, dateOfBirth, bmi, address, username, password)
    return redirect(url_for('home'))

@app.route("/home", methods=["GET", "POST"])
def home():
    blogs = getAllBlogs()
    return render_template("home.html", blogs=blogs)


@app.route("/create_blog", methods=["GET", "POST"])
def create_blog():
    form = CreateBlog()
    if form.validate_on_submit():
        username = session['username']
        createBlog(form, username)
        return redirect(url_for('home'))
    return render_template("create_blog.html", form=form)


@app.route("/blog", methods=["GET", "POST"])
def show_particular_blog():
    blogid = request.args.get('id')
    by = request.args.get('by')
    title = request.args.get('title')
    content = request.args.get('content')
    show = False
    if by == session['username']:
        show = True
    return render_template('show_particular_blog.html', title=title, content=content, by=by, show=show, blogid=blogid)


@app.route("/updateBlog", methods=["GET", "POST"])
def update_blog():
    form = CreateBlog()
    blogId = request.args.get('id')
    title = request.args.get('title')
    content = request.args.get('content')
    form.title.data = title
    form.content.data = content
    form.submit.label.text = 'update'
    if form.validate_on_submit():
        new_title = request.form['title']
        new_content = request.form['content']
        updateBlog(new_title, new_content, session['username'], blogId=blogId)
        return redirect(url_for('home'))
    return render_template("create_blog.html", form=form)


@app.route("/deleteBlog", methods=["GET", "POST"])
def delete_blog():
    blogId = request.args.get('id')
    deleteBlog(blogId, session['username'])
    return redirect(url_for('home'))


@app.route("/products")
def products_home():
    return render_template("product_home2.html")


@app.route("/products/result")
def products_result():
    return render_template("products_shown.html")