

@extends('admin')

@section('content')

<legend><h1>Edit Slider Here</h1></legend>


{!! Form::model($slider,array('method' => 'put','class'=>'form-horizontal','files'=>'true','action' => ['SlidersController@update',$slider->id])) !!}

<fieldset>




<!-- Text input-->
<div class="form-group">
  {!!Form::label('linked','linked',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-5">
   {!!Form::text('linked',null,['class'=>'form-control input-md','placeholder'=>'Link']) !!}
    
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
 {!!Form::label('filebutton','File Button',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-4">
   {!!Form::file('poster',null,['class'=>'input-file','type'=>'file']) !!}
  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
     {!!Form::submit('Submit',['class'=>'btn btn-danger']) !!}
  </div>
</div>

</fieldset>


{!! Form::close() !!}
@if($errors->any())
					   <div class="alert alert-danger">
				   <ul>
				   @foreach($errors->all() as $error)
				   <li>{{ $error }}</li>
				   
				   @endforeach
				   </ul>
				   </div>
				   
				   @endif
@stop

