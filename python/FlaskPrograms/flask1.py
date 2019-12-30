from flask import Flask, render_template

flask1 = Flask(__name__)

all_posts = [
{
	'title':'post 1',
	'content':'data of post 1',
	'author':'Hydra'
},
{
	'title':'post 1',
	'content':'data of post 1'
}
]

@flask1.route('/')
def index():
	return render_template('index.html')

@flask1.route('/posts')
def posts():
	return render_template('posts.html',posts=all_posts)


@flask1.route('/home/<string:name>')
def Hello(name):
	return "Mr."+ name

@flask1.route('/onlyget',methods=['POST'])
def get_req():
	return "hi. 3"


flask1.run(debug=True)
 

