from flask_wtf import Form
from wtforms import StringField, PasswordField, SubmitField, TextAreaField
from wtforms.validators import Email, Length, DataRequired, EqualTo

class CreateBlog(Form):
	title = StringField("Title", validators=[DataRequired()])
	content = TextAreaField("Content", validators=[DataRequired()])
	submit = SubmitField("create")
