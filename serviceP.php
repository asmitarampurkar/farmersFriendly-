
<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
	
?><!DOCTYPE html>
<html lang="en">
<style>
.collapsible {
  background-color:#787667;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #a4bdaa;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color:#a4bdaa;

  
}
</style>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min2.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Welcome !</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <header class="jumbotron hero-spacer">
            <h1>OUR SERVICE PROVIDERS</h1>
           
<button class="collapsible">Akash Rampurkar</button>
<div class="content">
  <p><lable>Name : Akash Rampurkar</lable><br>
    Contact number:9966335588<br>
    Address:Rampur Maharashta.</p>
   
    
    <a class="btn btn-info btn-large" href="contact.php">contact</a>
  
</div>

<button class="collapsible">Pankaj Deshmukh</button>
<div class="content">
  <p>Name :Pankaj Deshmukh<br>
    Contact number:9966335588<br>
    Address:pune Maharashta.</p>
   
    <a class="btn btn-info btn-large" href="contact.php">contact</a>
</div>
<button class="collapsible">Ashish Mergewar</button>
<div class="content">
  <p> Name Ashish Mergewar<br>
     Contact Number :7799985544<br>
    Address: Aurangabad, Maharshtra</p>
    <a class="btn btn-info btn-large" href="contact.php">contact</a>
</div>
<button class="collapsible">Pratik Dharasurkar</button>
<div class="content">
  <p>Name Pratik Dharasurkar<br>
     Contact Number : 9922336677<br>
    Address : Beed, Maharashtra</p>
     <a class="btn btn-info btn-large" href="contact.php">contact</a>
</div><br>
<p><a  href="logout.php" class="btn btn-danger btn-large">Logout </a>
            </p>
        </header>

        <hr>

        </div>

        <hr>


    </div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
            
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php } ?>