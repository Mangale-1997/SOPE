<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>School of Professional Engineering</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" type="text/css" href="card.css">
    </head>

    <body>
<x-app-layout>
<!-- card start -->

<div class="container">


         <a href="#">
       <div class="box-container">
       <div class="box">
       <img src="images/user..png">
       <h2>User Management</h2>
       <p>  Roles | Permision | Users </p>

        </div>
        </div></a>

        <a href ="{{route('viewservices')}}">
    <div class="box-container">
       <div class="box">
       <img src="images/Services.png">
       <h2> Services</h2>
        <p> All Services</p>
        </div>
        </div>
</a>
      </a>

       <div class="box-container">
       <div class="box">
       <img src="images/Setting.png">
       <h2>Settings</h2>
         <p>System configuration|Work Flow </p>
        </div>
        </div>
     <a href ="{{route('view_slideshow')}}">
        <div class="box-container">
       <div class="box">
       <img src="images/batch.png">
       <h2>Corousel</h2>
         <p> All Corousel</p>
        </div>

    </div> </a>
    <a href ="{{route('view_news')}}">
<div class="box-container">
       <div class="box">
       <img src="images/News.png">
       <h2>News</h2>
        <p> All News</p>
        </div>
    </div>
</a>
<div class="box-container">
          <div class="box">
          <img src="images/Questions.png">
          <h2>Questions</h2>
          <p> All Questions</p>
          </div>

        </div>
        </div>
        </div>

</div>
    </div>
</x-app-layout>



