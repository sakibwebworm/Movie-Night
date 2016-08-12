<?php $__env->startSection('content'); ?>

<legend><h1>Edit Slider Here</h1></legend>


<?php echo Form::model($slider,array('method' => 'put','class'=>'form-horizontal','files'=>'true','action' => ['SlidersController@update',$slider->id])); ?>


<fieldset>




<!-- Text input-->
<div class="form-group">
  <?php echo Form::label('linked','linked',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-5">
   <?php echo Form::text('linked',null,['class'=>'form-control input-md','placeholder'=>'Link']); ?>

    
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
 <?php echo Form::label('filebutton','File Button',['class'=>'col-md-4 control-label']); ?> 
  
  <div class="col-md-4">
   <?php echo Form::file('poster',null,['class'=>'input-file','type'=>'file']); ?>

  
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


<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>