from flask import *
from controller.validation_login import validate, create

app = Flask(__name__)


@app.route("/")
def login_signup():
    return render_template('login.html')


@app.route("/loginValidation", methods=["POST"])
def loginValidation():
    username_or_email = str(request.form["username"])
    password = str(request.form["password"])
    return validate(username_or_email, password)


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
    return create(name, email, mobileNum, dateOfBirth, bmi, address, username, password)

@app.route("/home")
def home():
    return render_template("home.html")


@app.route("/products")
def products_home():
    return render_template("product_home.html")


@app.route("/products/result")
def products_result():
    return render_template("products_shown.html")