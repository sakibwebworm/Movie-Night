<!DOCTYPE html>
<html lang="en" ng-app="movieFinder">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <!-- Custom CSS -->
    <link href="<?php echo e(URL::asset('css/business-casual.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/add_movie.css')); ?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>
     
     
     
     <?php echo $__env->yieldContent('content'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
    <script src="js/add_movie.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>TMDB Angular AJAX</title>
    
    
    
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>


<!-- header -->
<div class="container-fluid jumbotron">
<h1>Search Movies From TMDB</h1> 
</div>
<!-- fixed container -->
<div class="container" ng-controller="movieCtrl"> 
<!-- the debounce option refreshes the search every 800ms which is great -->
<input id="search" ng-model="search" ng-model-options="{ debounce: 800 }" placeholder="Search For A Movie" />


    <!-- movie and poster split screen -->
    <div class="row">
        <div ng-repeat="result in allresults">
        <div class="col-md-6 poster"> 
            <h1 id="title"><%result.original_title%></h1>
            <img class="animated flip" ng-src="<% result.poster_path%>" />
        </div>

        <div class="col-md-6 animated zoomInRight plot"> 
            <p class="overview"><% result.overview %></p>
            <br>
            <p class="rating"><% result.vote_average %>}</p>
        </div> 
    </div> 
      </div>
    
    <!-- end movie poster split screen -->

</div>

<?php echo $__env->yieldContent('content'); ?>
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- angular -->
<script src="bower_components/angular/angular.js"></script>
<!-- app logic -->
<script src="js/application.js"></script>


    

    
    
    
  </body>
</html>
