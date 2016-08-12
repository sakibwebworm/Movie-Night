<?php $__env->startSection('angularApp'); ?> 
ng-app="movieFinder" 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('head'); ?>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>

<link href="<?php echo e(URL::asset('css/add_movie.css')); ?>" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     

<?php $__env->stopSection(); ?>


<?php $__env->startSection('angularcontroller'); ?> 
ng-controller="movieCtrl"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('advice'); ?>
    <?php if(Session::has('flash_message')): ?>

        <div class="alert alert-success"id="hide_flash"><?php echo e(Session::get('flash_message')); ?></div>

    <?php endif; ?>
<div class="jumbotron">
    <h1>Hey.Easy way to add movie!</h1>
    <li>Search a Movie</li>
    <li>Then Select a Movie </li>
    <li>Provide the url of the movie*</li>
    <li>For now,grab the id of a youtube video</li>
    <li>"wTFpKVAdTV8 is the id here for this url"https://www.youtube.com/watch?v=wTFpKVAdTV8</li>
     <li><strong>Done!</strong></li> 
     <p>Like to work hard !! <a href="<?php echo e(url('admin/add_movie', $parameters = [], $secure = null)); ?>">Add manually</a></p>
  </div>
 <?php if($errors->any()): ?>
					   <div class="alert alert-danger">
				   <ul>
				   <?php foreach($errors->all() as $error): ?>
				   <li><?php echo e($error); ?></li>
				   
				   <?php endforeach; ?>
				   </ul>
				   </div>
				   
				   <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!-- the debounce option refreshes the search every 800ms which is great -->
<input id="search" ng-model="search"  placeholder="Search For A Movie" value="jungle" />


    <!-- movie and poster split screen -->
    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Chose the 
                        <strong>best movies</strong>
                    </h2>
		    
                    <hr>
                    
                   <div class="row">
            <div class="box">
             <div >
              <div ng-repeat="result in allresults 
                   
                   " class="col-sm-3 text-center movie_area">
                    <div class="hovereffect">
        <img class="img-responsive" src="<%result.poster_path%>" alt="<% result.original_title %>">
        <div class="overlay">
           
           <a class="info" href="#" ng-click="sakib(result)" >Select</a>
        </div>
         <h3><% result.original_title %>
                        
                    </h3> 
    </div>
                    
                     
                   
                  </div>
                    
              </div>
                <div class="clearfix"></div>
            
                </div></div>
               </div>
                </div>
           
        </div>
   
    
    <!-- end movie poster split screen -->

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="ModalShow">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
       <?php echo Form::open(array('url' => 'admin/quick_store','class'=>'form-horizontal','files'=>'true')); ?>


<fieldset>

<!-- Form Name -->
<legend>Add Movie</legend>

<!-- Text input-->
<div class="form-group">
  <?php echo Form::label('original_title','original_title',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-5">
   <?php echo Form::text('original_title',null,['class'=>'form-control input-md','placeholder'=>'Title']); ?>

    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <?php echo Form::label('overview','overview',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-5">
   <?php echo Form::text('overview',null,['class'=>'form-control input-md','placeholder'=>'Overview']); ?>

    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
 <?php echo Form::label('poster_path','Poster',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-4">
   <?php echo Form::text('poster_path',null,['class'=>'form-control input-md']); ?>

  
  </div>
</div>



<!-- Video url --> 
<div class="form-group">
  <?php echo Form::label('video','video',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-5">
   <?php echo Form::text('video',null,['class'=>'form-control input-md','placeholder'=>'Url']); ?>

    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
     <?php echo Form::submit('Submit',['class'=>'btn btn-danger btn_danger_width']); ?>

  </div>
</div>

</fieldset>


<?php echo Form::close(); ?>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
 <script src="<?php echo e(URL::asset('js/add_movie.js')); ?>"></script>
<script type="text/javascript">
    
    function rakib()
    {
       
        $("#myModal").modal();
   
    }
    
    </script>
<script type="text/javascript">
    $('#hide_flash').fadeIn('fast').delay(3000).fadeOut('slow');
</script>

<?php $__env->stopSection(); ?>    
    
    
 

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>