<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Northern Corvette</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="_css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Business Frontpage' Template -->
    <link href="_css/business-frontpage.css" rel="stylesheet">
    <link href="_css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Northern Corvette</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <div class="business-header">
    
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
          	<!-- The background image is set in the custom CSS -->
            <h1 class="tagline">Your Canadian Source of Chevvy Parts ...</h1>
          </div>
        </div>
      
      </div>
    
    </div>
    
    <div class="container">
    
      <hr>
      
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <h2>What We Do</h2>
          <p>Here is where you will introduce visitors to the business. Make sure to use clear and informative sentences. Use appropriate keywords here to make sure search engines can find the business.</p>
          <p>When using this template, two decisions will be open to visitors. Decision one will be to use above-the-fold information to interact with the page. Decision two will be to scroll down and see the additional marketing boxes. Either way, the user will get the information they need!</p>
          <p><a class="btn btn-default btn-large" href="#">Call to action &raquo;</a></p>
        </div>
        <div class="col-lg-4 col-sm-4">
          <img class="img-responsive" src="_img/northern_corvette_logo.jpg">

		  <address>
			<abbr title="Phone"><span class="glyphicon glyphicon-phone-alt"></span>:</abbr> (123) 456-7890<br>
            <abbr title="Email"><span class="glyphicon glyphicon-envelope"></span>:</abbr> <a href="mailto:#">first.last@example.com</a>
		  </address>

        </div>
      </div>
      
      <hr>

      <div class="row">
        <div class="col-sm-4">
        	<img class="img-circle img-responsive text-center" src="_img/service.jpg">
            <h2>Service</h2>
            <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
        </div>
        <div class="col-sm-4">
        	<img class="img-circle img-responsive" src="_img/value.jpg">
            <h2>Value</h2>
            <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <div class="col-sm-4">
        	<img class="img-circle img-responsive" src="_img/integrity.jpg">
            <h2>Ingetrity</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
      </div>

      <hr>

      </div> <!-- /container -->
      <?php include('_includes/footer.php'); ?>

    <!-- JavaScript -->
    <script src="_js/jquery-1.10.2.js"></script>
    <script src="_js/bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // fade in content.
            $( '.business-header' ).fadeIn(2000);   
            $( '.container' ).slideDown(3000);   
        });

    </script>

  </body>
</html>