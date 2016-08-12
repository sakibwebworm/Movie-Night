<?php $__env->startSection('content'); ?>


<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                       We found
                        <strong>All From the</strong> Database
                    </h2>
                    <hr>
                    
                   <div class="row">
            <div class="box">
             <?php foreach($movies as $movie): ?>
              <div class="col-sm-3 text-center">
                   <div class="overlay">
                    <a href="movies/<?php echo e($movie->id); ?>">
                     <img class="img-responsive" src="<?php echo e($movie->poster_path); ?>" alt="">
                    </a>
                   </div>
                    
                </div>
               <?php endforeach; ?>
               
               
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 text-center">
                <?php echo $movies->render(); ?>

            </div>
            
        </div>
               </div>
                </div>
           
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('homepage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>