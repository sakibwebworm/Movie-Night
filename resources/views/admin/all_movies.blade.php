

@extends('admin')

@section('content')
@if(Session::has('flash_message'))
	
<div class="alert alert-success"id="hide_flash">{{Session::get('flash_message')}}</div>

@endif
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
				 @foreach($movies as $movie)
                        
                        <tr>
                                        <td>{{$movie->original_title}}</td>
                                        <td>{{$movie->created_at->format('M j, Y')}}</td>
                                        <td><a href="{{ URL::action('MoviesController@edit', $movie->id) }}">
					<button type="button" class="btn btn-success" >
					Update
					</button></a>
					</td>
					{!! Form::open(array('method' => 'delete','action' => ['MoviesController@destroy',$movie->id])) !!}
					
                                        <td>{!!Form::submit('Submit',['class'=>'btn btn-danger']) !!}</a>
					{!! Form::close() !!}
					</td>
				    </tr>
                       
                          @endforeach
                                    
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>

@stop

@section('footer')
<script type="text/javascript">
$('#hide_flash').fadeIn('fast').delay(3000).fadeOut('slow');
</script>
@stop
