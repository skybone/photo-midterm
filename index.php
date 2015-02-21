<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Midterm Photo Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://www.skylyy.com">
                    <i class="glyphicon glyphicon-star"></i>  <span class="light">Web UX/UI Design</span> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Focus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#socia">Social</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Photography</h1>
                        <p class="intro-text">Photos and finding the perfect shot.<br>By Skyler Lyytinen.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="glyphicon glyphicon-camera animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>How I got here</h2> 
                <p>While I was planning my Design Studies portfolio for the graphic design course application in 2013, I stumbled upon the course description for the <strong>Interactive Media Design</strong> program also at Algonquin College.</p><p>With basic understanding of manual photography post fall 2014, and having experienced in-depth design practices in the <strong>Design Studies Program</strong>. I decided to stick with my strengths in being a freelance front end web developer and push it to the next level.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                   <h2>Focus</h2>
                   <p>Along with design and code, photography can easily compliment any design project.</p> 
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="content-section text-center">
            <div class="container">
                <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                <h2>Photo Gallery</h2>
                <p>Here are some of my favorite shots from my 2014 experience.</p>
                <br><br>
                <script></script>
            </div>
        </div>
    </div>
    </section>

<section id="socia" class="content-section text-center">
            <div class="container">
                <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
            <h2>Follow Me</h2>
                <p>If you liked this page and want to see more of my work, or get bootstrap theme's like <a href="http://startbootstrap.com/template-overviews/grayscale/">this</a> one, check out the following.</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://instagram.com/skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-globe fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i></a>
                    </li>
                </ul>
        </div>
        </div>
    </div>
</section>

<!--contact2-->
<section id="contact2" class="content-section text-center">
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <h2>Contact</h2>
                            <?php $check = $_GET['success']; ?>

                                <p <?php if(isset($_GET['success'])) { echo " style='display:none;'";}?>>Have any questions or looking for something in perticular? Send me a message.</p>
                                <?php if(isset($_GET['success'])) { echo " <p>Thanks for you submission. We will be in touch soon.</p>'";}?>
                        <div class="row">
                            <div class="col-md-12">
                            <form role="form"<?php if(isset($_GET['success'])) { echo " style='display:none;'";}?> data-toggle="validator" name="contactform" method="post" action="mail.php">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputName">Your Name</label>
                                        <input type="text" class="form-control" id="InputName" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Email address</label>
                                        <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Your Email" required>
                                    </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputMessage">Message Here</label>
                                        <textarea cols="20" rows="5" class="form-control" id="InputMessage" name="message" placeholder="Your Message"></textarea>
                                    </div>
                            </div>
                                                            </div>

                                    <button type="submit" value="submit" class="btn btn-blue large">Submit</button>
                                
                            </form>

                        </div>
                </div>
            </div>
            </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="http://www.skylyy.com">www.skylyy.com</a> 2015.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
