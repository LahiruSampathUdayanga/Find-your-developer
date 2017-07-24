
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example of Bootstrap 3 Static Navbar Extended</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

   
    <link href="css/index.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--sign up page link-->

    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>

</head>

<body>

    <!--nav bar start-->
    <?php include('component/index-page/navbar.php');?>
    <!--nav bar end-->

    <!--Header start -->
    <?php include('component/index-page/header.php');?>
    <!--Header end -->

    <!--go to top button start-->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="glyphicon glyphicon-chevron-up"></i></button>
    <!--go to top button end-->

    <!--About section start -->
    <?php include('component/index-page/about.php');?>
    <!--About section end -->

    <!--services section start-->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <?php include('component/index-page/ourServices.php');?>
    <!--services section end-->

    <!--how to work start -->
    <?php include('component/index-page/howToWork.php');?>
    <!--how to work end -->

    <!--contact page start-->
    <?php include('component/index-page/contact.php');?>
    <!--contact page end-->
    <!--footer section start-->
    <?php include('component/index-page/footer.php');?>
    <!--footer section end-->

<script src = "https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"> </script>
<script src = "js/index.js"> </script>
   
</body>

</html>