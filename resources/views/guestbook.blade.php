<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset=utf-8>
	<meta id="token" name="token" value="{{csrf_token()}}">
	
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Guestbook</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style type="text/css" media="screen">
    	.error{
    		color:red;
    		font-weight: bold;
    	}
    </style>
</head>
<body class="container">
 <h2>Mon GuestBook</h2>
  <div id="guestbook">

   <form v-on="submit: onSubmit" accept-charset="utf-8">
    <div class="form-group">
    	<label for="name">Nom:<span class="error" v-if="! newMessage.name">*</span></label>
    	<input class="form-control" type="text" name="name" id="name" v-model="newMessage.name" placeholder="">
    </div>
    <div class="form-group">
    	<label for="message">Message:<span class="error" v-if="! newMessage.message">*</span></label>
    	<textarea name="message" id="message" class="form-control" v-model="newMessage.message" placeholder="Enter message here.."></textarea> 
    </div> 
       
     <div class="form-group">
    	
    	<input type="submit" v-if="! submitted" v-attr="disabled: errors" name="message" id="message" class="btn btn-default" value="Sign GuestBook" ></textarea> 
    </div>
    <div class="alert alert-success" v-if="submitted">Merci!</div>
   </form>
  <hr>
  	<article v-repeat="messages">
  		<h3>@{{name}}</h3>
  		<div class="body">
  			@{{message}}
  		</div>
  		</body>
  	</article>


  </div>
	
	<script type="text/javascript" src="/js/vendor.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>