<!doctype html>
<html>
    <head>
        <title>Log into Acess Techlist</title>
        
		
		<link href="stylesheet.css" rel="stylesheet" type="text/css">
        <script src="jquery-3.2.1.min.js" type="text/javascript"></script>

			 
	<div class="page-header">
		
			<img src="images/logo.png"  class="img-fluid" alt="..." class="img-thumbnail">
			<img src="images/title.png" class="img-fluid" alt="Responsive image">   
	</div>
	
	<br>
		

   </head>
  <body>
	
		<form id="loginform" method="post">
            <div id="div_login">
		
                <h1>Login to account</h1>
                <div id="message"></div>
                <div>
					Enter username
                    <input type="text" class="textbox" id="username" name="username" placeholder="Enter Username" />
                </div>
                <div>
					Enter password
                    <input type="password" class="textbox" id="password" name="password" placeholder="Enter Password"/>
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
	</form>
     
		
	<script type="text/javascript">
	$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'validateLogin.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
  
                if (jsonData.success == "1")
                {
                    location.href = 'productPage.html';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
           }
       });
     });
});
		
	
	
	</script>

    </body>
</html>

