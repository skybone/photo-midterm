<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success!</title>

    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom Style (not required) -->
    <style>
        #contact {
            padding-top: 100px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
<body>
    
    <section id="contact" class="container">
       <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Success!</h3>
              </div>
              <div class="panel-body">
            	<?php

                $name = $_POST['name'];
                $email = $_POST['email'];
                $text = $_POST['message'];
                $subject = "Email submission from your website";
                $emailto = "taylor.smith84@gmail.com";

                $header = "From: $name <$email>\r\nReply-To: $email\r\n";
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type:text/html;charset=iso-8859-1\r\n";

                $message = "From: $name, Email: $email<br /><hr />$text";

                $success = mail($emailto, $subject, $message, $header);


            		if ($success) 

            		{
            		    echo "<h2>We've recieved your submission and will be in touch soon.</h2>";
            		} 
            		else 
            		{
            			echo "<p>Your submission was not recieved. Please try again later.</p>";
            		}

            ?>
            </div>
          </div>
        </div>
      </div>
  </section>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.js"></script>


  </body>
  
</html>