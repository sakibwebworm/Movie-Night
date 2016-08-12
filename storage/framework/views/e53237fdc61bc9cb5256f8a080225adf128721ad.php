<?php $__env->startSection('content'); ?>

<legend><h1>Add movie here</h1></legend>
<?php if(Session::has('flash_message')): ?>

    <div class="alert alert-success"id="hide_flash"><?php echo e(Session::get('flash_message')); ?></div>

<?php endif; ?>


<?php echo Form::open(array('url' => 'admin/store_movie','class'=>'form-horizontal','files'=>'true')); ?>


<fieldset>

<!-- Form Name -->


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
    <div class="form-group">
        <?php echo Form::label('poster_path','Poster',['class'=>'col-md-4 control-label']); ?>


        <div class="col-md-4">
            <?php echo Form::file('poster_path',null,['class'=>'input-file','type'=>'file']); ?>


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
     <?php echo Form::submit('Submit',['class'=>'btn btn-danger']); ?>

  </div>
</div>

</fieldset>


<?php echo Form::close(); ?>

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

<?php $__env->startSection('footer'); ?>
    <script type="text/javascript">
        $('#hide_flash').fadeIn('fast').delay(3000).fadeOut('slow');
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>