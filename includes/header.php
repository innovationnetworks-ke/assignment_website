<?php require 'process.php';
?>
<?php 

if (isset($_GET['logout'])) {
	$_SESSION['logged']=0;
	session_unset($_SESSION['logged']);
	session_destroy();
	header('location:index.php');
}
?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Helper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
  
    <link rel="stylesheet" href="includes/bulma-0.9.1/bulma/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
    <!--  -->
    <link sizes="24x24" type="image/icon" rel="icon" href="https://assignmentmavens.com/img/unpeopled.png">
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="./Achieve Success in College with Reliable Services Online _ AssignmentMavens_files/bootstrap.min.css"> -->
    <link rel="stylesheet" href="includes/all.min.css">
    <link rel="stylesheet" href="includes/animate.min.css">
    <link href="includes/css2" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="includes/cookieconsent.min.css">
    <link href="includes/nice-select.min.css" rel="stylesheet">
    <!-- Main css -->
    <!-- <link href="includes/style.min.css" rel="stylesheet" type="text/css"> -->
       <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="includes/regush.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body><script>
document.addEventListener( 'DOMContentLoaded',function(){
 var searchpara=document.getElementById("search_para").innerHTML;
 searchpara=searchpara.toString();
 document.getElementById("search").onclick =function ()
 {highlight_word(searchpara)};	
},false);

function highlight_word(searchpara)
{
 var text=document.getElementById("search_text").value;
 if(text)
 {
  var pattern=new RegExp("("+text+")", "gi");
  var new_text=searchpara.replace(pattern, "<span class='highlight'>"+text+"</span>");
  document.getElementById("search_para").innerHTML=new_text;
 }
}
</script>

<nav class="navbar navbar-default banner" style="background:#007b5e">
  <div class="container-fluid bg-">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#naav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color:white; font-size:30px">Assign Helper</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="naav">
      
      <form class="navbar-form navbar-right navbar-form-search" role="search">
        <div class="search-form-container hdn" id="search-input-container">
          <div class="search-input-group">
          <button class="btn btn-primary"><a style="color:white" href="index.php?#pricing">ORDER NOW </a></button>            <div class="form-group">
              <input type="text" id="searchTerm" class="form-control" placeholder="Search for...">
              <button type="submit" onclick="search()" class="btn btn-default" id="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
              
            </div>
          </div>
          
        </div>
        
      </form>
      <style>
      ul li a{
        color:white !important;
      }
      ul li a:hover{
        color:black !important; 
      }
      </style>
      <ul class="nav navbar-nav navbar-right navbar-nav-primary">
        <li class="nav-item"><a href="index.php">Home</a></li>
        <!-- <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
          <div class="dropdown-menu" aria-labelledby="services">
            <ul id="uul" class="nav navbar-nav "style="list-style:none;">
              <li class="nav-item text-center"><a class="dropdown-item" href="#">Action</a></li>
              <li class="nav-item text-center"><a class="dropdown-item" href="#">action</a></li>
              <div class="dropdown-divider"></div> -->
              <!-- <li class="nav-item text-center"><a class="dropdown-item" href="#">else here</a></li>
            </ul>
          </div>
        </li> -->
        <li class="nav-item"><a href="index.php?#areas">Serices</a></li>
        <li class="nav-item"><a href="index.php?#testimonials">Testimonals</a></li>
        <li class="nav-item"><a href="index.php?#pricing">Pricing</a></li>
        <!-- <li class="nav-item"><a href="about.php">About us</a></li> -->
        <li class="nav-item"><a href="contacts.php">Contact us</a></li>
        <?php if(!isset($_SESSION['logged'])): ?>
        <li class="nav-item"><a href="login.php"><i class="fa fa-unlock">Login</i></a></li>
        <li class="nav-item"><a href="register.php"><i class="fa fa-user">Sign Up</i></a></li>       
        <?php endif; ?>
        <li><?php if (isset($_SESSION['logged'])&&$_SESSION['logged']=1):?>
		      <a href="index.php?logout=1">logout</a>
          <?php endif; ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->    
</body>
</html>
