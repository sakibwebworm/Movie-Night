<?php $__env->startSection('content'); ?>
<?php if(Session::has('flash_message')): ?>
	
<div class="alert alert-success"id="hide_flash"><?php echo e(Session::get('flash_message')); ?></div>

<?php endif; ?>
<legend><h1>List of all the movies(Update/delete)</h1></legend>


<div class="row">
                    <div class="col-lg-12">
                        <h2>Bordered Table</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Created</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
				 <?php foreach($movies as $movie): ?>
                        
                        <tr>
                                        <td><?php echo e($movie->original_title); ?></td>
                                        <td><?php echo e($movie->created_at->format('M j, Y')); ?></td>
                                        <td><a href="<?php echo e(URL::action('MoviesController@edit', $movie->id)); ?>">
					<button type="button" class="btn btn-success" >
					Update
					</button></a>
					</td>
					<?php echo Form::open(array('method' => 'delete','action' => ['MoviesController@destroy',$movie->id])); ?>

					
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