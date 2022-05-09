<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
 
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><i class="fa fa-address-card-o" style="font-size:36px"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">ABOUT ME</a></li>
        <li><a href="#tour">EXPERIENCE</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">DOCUMENT
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Paper.pdf">PAPER</a></li>
            <li><a href="#">RESUME</a></li>
            <li><a href="#">TRANSCRIPT</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="New York" width="1200" height="500">
        <div class="carousel-caption">
          <h3>Welcome to my website!</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="2.jpg" alt="Chicago" width="1200" height="500">
        <div class="carousel-caption">
          <h3>Porpia's website!!</h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="Los Angeles" width="1200" height="500">
        <div class="carousel-caption">
          <h3>Nice to meet you!</h3>
          <p></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>ABOUT ME</h3>
  <p><em>WIPADA   SILARACH</em></p>
  <p>Hi everyone! my name is Wipada Silarach or just call me Porpia. I'm graduated from Khonkaen University
     major Computer Science. I learning about Data Scientist, Data Engineering process for transform data to
     information and I learned some computer language. CSS, Bootstrap, PHP, HTML that is some language 
     I had used to create my website.At first Data Science and Data Engineering it hard for me but when I knowledge
     about it don't hard that much. I learned how to prepare data for use in model and sometime it's fun.
  </p>
  <br> 
 
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Me!</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="mypic.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Name: Wipada Silarach</p>
        <p>Nickname: Porpia</p>
        <p>Was born 16 December 1999</p>
      </div>
      </div>
      <div class="col-sm-4">
      <p class="text-center"><strong>Skills</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="mypic.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>PHP, HTML, CSS, Bootstrap</p>
        <p>Python, SQL, java  </p>
        <p>Rapid Miner</p>
      </div>
      </div>
      <div class="col-sm-4">
      <p class="text-center"><strong>Education</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="mypic.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>2558 - 2560</p>
        <p>School: Kutchabprachasan, GPA: 3.68</p>
        <p>2561 - 2565</p>
        <p>University: Khonkaen, GPA: 2.71</p>
      </div>
    </div>
  </div><br><hr>
  <h3>CAREER OBJECTIVE</h3>
  <div class="row">
    <div class="col-sm-6">
  <p>(1) A competent recent graduate. Seeking a position in the field of Data Science 
    to contribute my computer sciences knowledge and expertise to a  towards the 
    continuing advancement of the company.</p>
</div>
<div class="col-sm-6">
  <p>(2) To uses knowledge and abilities to effectively create and design multiple websites. 
    Strong skills and knowledge in web development with relevant programs and software tools.</p>
</div>
</div><br><hr>

<h3>MY PERSONAL</h3>
<p>"If something's easy to get, you're more likely to get bored and forget about it, 
  but the sense of accomplishment is different when you work hard to earn something even 
  if you fail, at least you know that you tried" I'm usually a person who lacks confidence
  but always strive and focus on what I do.</p>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">EXPERIENCE</h3>
    <p class="text-center">It's my project and internship!</p><br>
    
    <div class="row text-center">
      <div class="col-sm-6">
        <div class="thumbnail">
          <img src="sen1.gif" alt="sentiment" width="400" height="300">
          <p><strong>My project</strong></p>
          <p>Sentiment Analysis</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Detail</button>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="thumbnail">
          <img src="per2.gif" alt="internship" width="400" height="300">
          <p><strong>Internship</strong></p>
          <p>KKS Smart Office</p>
          <button class="btn" data-toggle="modal" data-target="#myModal2">Detail</button>
        </div>
      </div>
    </div>
    <p>You can visit my full project at <a href="https://github.com/wipada-ai">Github</a></p> 

        <br>
        <div class="row text-center">
            <div class="col-sm-6">
                <img src="sen2.gif" class="img-responsive" style="width:100%"  alt="Image">
                <p>Positive</p>
            </div>
            <div class="col-sm-6">
                <img src="sen3.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Negative</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6">
                <img src="sen4.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Neutral</p>
            </div>
            <div class="col-sm-6">
                <img src="sen1.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Count Class</p>
            </div>
        </div>
        <h3>Thai sentiment analysis about education in Thailand on Twitter.</h3>
        <p>Text mining from social networks has become very important
            in order to thrive in business and sentiment monitoring.
            Therefore, this project aims to create a model that classifies
            the sentiments of Thai text comments on Twitter into three
            categories: negative, positive, and neutral. The collected data
            is labeled and selected as a vector feature. The major results
            are analyzed and indicate the negativity of the data. Thus,
            the research presents imbalanced data management and adjustment
            using four methods: Random Under Sampler, Random Over Sampler,
            SMOTE and Bagging of under sampler subsets. Afterward, the transformed
            training data is used to train models for analyzing the sentiment of data
            with the classification algorithms: Logistic regression, XGBoost, Decision tree,
            SVM, Random Forest, K-NN and Naïve Bayes. The hyperparameters of each algorithm
            are well selected by the grid search method and evaluate the model's performance
            by a confusion matrix of result pre and post imbalanced data adaptation.
        </p><hr>

        <br>
        <div class="row text-center">
            <div class="col-sm-6">
                <img src="per1.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Set the debtor group</p>
            </div>
            <div class="col-sm-6">
                <img src="per4.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Set customer information</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-6">
                <img src="per3.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Add holiday</p>
            </div>
            <div class="col-sm-6">
                <img src="per2.gif" class="img-responsive" style="width:100%" alt="Image">
                <p>Edit personal information</p>
            </div>
        </div>

        <h3>KKS Smart Office.</h3>
        <p>Use PHP, Html, CSS, Bootstrap, SQL, for create website.
              By developing from the existing website for example, can add customer information,
              can set holiday according to the conditions set by the company.</p>

  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h3><span class="glyphicon glyphicon-lock"></span>Thai sentiment analysis about education in Thailand on Twitter.</h3>
          <h5>Text mining from social networks has become very important
            in order to thrive in business and sentiment monitoring.
            Therefore, this project aims to create a model that classifies
            the sentiments of Thai text comments on Twitter into three
            categories: negative, positive, and neutral. The collected data
            is labeled and selected as a vector feature. The major results
            are analyzed and indicate the negativity of the data. Thus,
            the research presents imbalanced data management and adjustment
            using four methods: Random Under Sampler, Random Over Sampler,
            SMOTE and Bagging of under sampler subsets. Afterward, the transformed
            training data is used to train models for analyzing the sentiment of data
            with the classification algorithms: Logistic regression, XGBoost, Decision tree,
            SVM, Random Forest, K-NN and Naïve Bayes. The hyperparameters of each algorithm
            are well selected by the grid search method and evaluate the model's performance
            by a confusion matrix of result pre and post imbalanced data adaptation.</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h3><span class="glyphicon glyphicon-lock"></span>KKS Smart Office.</h3>
          <h5>Use PHP, Html, CSS, Bootstrap, SQL, for create website.
              By developing from the existing website for example, can add customer information,
              can set holiday according to the conditions set by the company.
          </h5>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <br>
  <h3 class="text-center">CONTACT</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Address</a></li>
    <li><a data-toggle="tab" href="#menu1">Link</a></li>
  </ul><br>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <p><span class="glyphicon glyphicon-map-marker"></span>Udonthani, 41250</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 0957059855</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: wipadasilarach@gmail.com</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p><a href="https://github.com/wipada-ai">Github</a></p>
      <p><a href="https://www.facebook.com/profile.php?id=100007820896690">Facebook</a></p> 
      <p><a href="https://www.instagram.com/porpia_99/?hl=en">Instagram</a></p>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="img-responsive" style="width:100%">

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>

</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
