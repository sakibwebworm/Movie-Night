<?php $__env->startSection('content'); ?>


<div class="row">
            <div class="box">
              <div class="col-sm-12">
 

      
<div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https:\\youtube.com/embed/<?php echo e($movie->video); ?>"></iframe>
</div>
        </div>

        
                
                    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Suggested Film
                        <strong>worth watching</strong>
                    </h2>
                    <hr>
                    
                   <div class="row">
            <div class="box">
             
            
             <?php
                 $movies = DB::table('movies')->where('id', '!=', $movie->id)->take(4)->get();
                ?>
                
             <?php foreach($movies as $movie): ?>
              <div class="col-sm-3 text-center">
                   <div class="overlay">
                    <a href="/movies/<?php echo e($movie->id); ?>">
                     <img class="img-responsive" src="<?php echo e($movie->poster_path); ?>" alt="">
                     </a>
                    <h3>
                        
                    </h3>  
                   </div>
                    
                </div>
               <?php endforeach; ?>
               
                
               
                <div class="clearfix"></div>
            </div>
        </div>
               </div>
                </div>
           
        </div>
             
        


    </div>
    <!-- /.container -->

    

   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>