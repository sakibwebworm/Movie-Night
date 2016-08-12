<?php $__env->startSection('content'); ?>
    <?php if(Session::has('flash_message')): ?>

        <div class="alert alert-success"id="hide_flash"><?php echo e(Session::get('flash_message')); ?></div>

    <?php endif; ?>
    <legend><h1>Wishlist</h1></legend>
    <div class="jumbotron">
        <li>If you use the api post method to upload movie details</li>
        <li>For now only those</li>
        <li>Movies will show here!</li>
        <li><strong>Go and use the api!!</strong></li>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2>Bordered Table</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($wishlist as $movie): ?>

                        <tr>
                            <td><?php echo e($movie->original_title); ?></td>
                            <td><?php echo e($movie->created_at->format('M j, Y')); ?></td>
                            <?php echo Form::open(array('method' => 'delete','action' => ['MoviesController@destruction',$movie->id])); ?>


                            <td><?php echo Form::submit('Submit',['class'=>'btn btn-danger']); ?></a>
                                <?php echo Form::close(); ?>

                            </td>
                        </tr>

                    <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script type="text/javascript">
        $('#hide_flash').fadeIn('fast').delay(3000).fadeOut('slow');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>