from flask import Flask, render_template, request
from tkinter import *
from flask_sqlalchemy import SQLAlchemy



app = Flask(__name__)

app.config['SQLALCHEMY_DATABASE_URL'] = 'postgresql://'

db = SQLAlchemy(app)

@app.route('/')
def index():
    return 'This is the homepage'

@app.route('/profile/<name>')
def profile(name):
    return render_template("profile.html", name=name)

@app.route('/show')
def show():
    x = ["Comp3901","Comp2110"]

    return render_template("show.html", x=x)

@app.route('/index')
def page2():
    x = ["Comp3901","Comp2110"]


    return render_template("index.php", x=x)


@app.route('/send', methods=['GET', 'POST'])
def send():

    if request.method == 'POST':
        x = ["Comp3901","Comp2110"]
        # return render_template("new.html", x=x)
        return render_template("index.php", x=x)
    return render_template("profile.html")







if __name__ == "__main__":
    app.run(debug= True)
