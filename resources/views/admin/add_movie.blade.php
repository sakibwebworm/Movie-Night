

@extends('admin')

@section('content')

<legend><h1>Add movie here</h1></legend>
@if(Session::has('flash_message'))

    <div class="alert alert-success"id="hide_flash">{{Session::get('flash_message')}}</div>

@endif


{!! Form::open(array('url' => 'admin/store_movie','class'=>'form-horizontal','files'=>'true')) !!}

<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  {!!Form::label('original_title','original_title',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-5">
   {!!Form::text('original_title',null,['class'=>'form-control input-md','placeholder'=>'Title']) !!}
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  {!!Form::label('overview','overview',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-5">
   {!!Form::text('overview',null,['class'=>'form-control input-md','placeholder'=>'Overview']) !!}
    
  </div>
</div>
    <div class="form-group">
        {!!Form::label('poster_path','Poster',['class'=>'col-md-4 control-label']) !!}

        <div class="col-md-4">
            {!!Form::file('poster_path',null,['class'=>'input-file','type'=>'file']) !!}

        </div>
    </div>
    <!-- Video url -->
<div class="form-group">
  {!!Form::label('video','video',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-5">
   {!!Form::text('video',null,['class'=>'form-control input-md','placeholder'=>'Url']) !!}
    
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

@section('footer')
    <script type="text/javascript">
        $('#hide_flash').fadeIn('fast').delay(3000).fadeOut('slow');
    </script>
    @stop