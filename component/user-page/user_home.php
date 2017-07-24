<?php
include('../../database/database_connection.php');

session_start();

if(isset($_SESSION['email_id'])){

}else{
  ?>
  <script type='text/javascript'>
  alert('You must be Logged In!\n Plese Go \n HOME page and login');
  window.location='../../index.php';
  </script>
  <?php
}
?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <!--page validate link-->

    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
    
<style type="text/css">

/*navbar user page*/
body{
background: #fff;
}

.navbar, .dropdown-menu{
background:#09ba32;
border: none;
}

.nav>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .dropdown-menu>li>a, .dropdown-menu>li{
  border-bottom: 3px solid transparent;
}
.nav>li>a:focus, .nav>li>a:hover,.nav .open>a, .nav .open>a:focus, .nav .open>a:hover, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
  border-bottom: 3px solid transparent;
  background: rgba(154, 154, 154, 0.27);
}
.navbar a, .dropdown-menu>li>a, .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover, .navbar-toggle{
 color: #fff;
}
.dropdown-menu{
      -webkit-box-shadow: none;
    box-shadow:none;
}

.nav li:hover:nth-child(8n+1), .nav li.active:nth-child(8n+1){
  border-bottom: #b6f423 4px solid;
}
.nav li:hover:nth-child(8n+2), .nav li.active:nth-child(8n+2){
  border-bottom: #82e2ea 4px solid;
}
.nav li:hover:nth-child(8n+3), .nav li.active:nth-child(8n+3){
  border-bottom: #f8b42c 4px solid;
}
.nav li:hover:nth-child(8n+4), .nav li.active:nth-child(8n+4){
  border-bottom: #fd594a 4px solid;
}
.nav li:hover:nth-child(8n+5), .nav li.active:nth-child(8n+5){
  border-bottom: #e8479d 4px solid;
}
.nav li:hover:nth-child(8n+6), .nav li.active:nth-child(8n+6){
  border-bottom: #a12eeb 4px solid;
}
.nav li:hover:nth-child(8n+7), .nav li.active:nth-child(8n+7){
  border-bottom: #4785d9 4px solid;
}
.nav li:hover:nth-child(8n+8), .nav li.active:nth-child(8n+8){
  border-bottom: #2aed9a 4px solid;
}

.navbar-toggle .icon-bar{
    color: #fff;
    background: #000000;
}

/*footer user page*/
.bg-lightgray{
    background-color:#09ba32;
}

/*header Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}

#contact{
    
  font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  height:auto;
  background: #CDD3E5; /* fallback for old browsers 3a6186 */
  color : #000;    
}
.contact-section{
  padding-top: 40px;
}

/*form validation css file*/

#success_message {
    display: none;
}

</style>
</head>

<body>

<!--navbar user page start-->
<?php include('user_navbar.php');  ?>
<!--navbar user page end-->

<section id="contact">
        <div class="section-content">
            <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
        </div>
        <div class="contact-section">
            <div class="container">
                <?php include('user_data_entry_form.php');  ?>
            </div>
        </div>
</section>

<!--footer user page start-->
<?php include('user_footer.php');  ?>
<!--footer user page end-->


</body>
</html>