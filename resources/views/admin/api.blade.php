

@extends('admin')

@section('content')

<legend><h1>Movie Api</h1></legend>


@if(empty(Auth::user()->userhasApikey()))
	<div class="jumbotron">
    <h1>Hey.Want to grab an api key</h1>
     <li>That will never work after few minutes</li>
     <li>This is ajax test in laravel</li>
     <li>Use postman until the new update!</li>
    <li>Type your password</li>
    <li>Hit Submit!</li>
    <li>Hit save!</li>
     <li><strong>Go and use the api!!</strong></li>
   </div>
{!! Form::open(array('url' => 'api/auth/login','class'=>'form-horizontal','files'=>'true','id'=>'api')) !!}

<fieldset>
<input name="email" type="hidden" value="{{Auth::user()->email}}">
<!-- password field-->
<div class="form-group">
  {!!Form::label('password','password',['class'=>'col-md-4 control-label']) !!} 
  
  <div class="col-md-5">
    {!!Form::password('password',null) !!}
    
  </div>
</div>
<!-- submit -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
     {!!Form::submit('Submit',['class'=>'btn btn-danger']) !!}
  </div>
</div>

</fieldset>
{!! Form::close() !!}

@else
	
<p>Your Api-key:
<strong>{{Auth::user()->api_key}}</strong></p>

@endif

<div id="save_api" style="display:none;">
{!! Form::open(array('url' => 'admin/save/store_api','class'=>'form-horizontal','id'=>'save')) !!}

<fieldset>
<input name="api_key" id="api_key"type="hidden" value="">
<input name="user_id" id="user_id"type="hidden" value="{{Auth::user()->id}}">
<!-- submit -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
     {!!Form::submit('Save',['class'=>'btn btn-success']) !!}
  </div>
</div>

</fieldset>
{!! Form::close() !!}
</div>
@stop

@section('footer')
<script>
$(function(){

$('#api').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/api/auth/login',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            
	    $( "#api" ).fadeOut( "slow", function() {
		    console.log(data);
		    $( ".container-fluid" ).append( "<h3>Your Api Key:"+ data.token +"</h3>" );
		    $('#save_api').show();
    //
    
    $('#api_key').val(data.token);
      
       });
        },
        error: function(data){

        }
    })
    });
});
</script>
<script>
$(function(){

$('#save').on('submit',function(e){
    $.ajaxSetup({
        header:$('meta[name="_token"]').attr('content')
    })
    e.preventDefault(e);

        $.ajax({

        type:"POST",
        url:'/admin/save/store_api',
        data:$(this).serialize(),
        dataType: 'json',
        success: function(data){
            
	   $('#save_api').hide();
	   $('.jumbotoron').hide();
        },
        error: function(data){

        }
    })
    });
});
</script>

@stop