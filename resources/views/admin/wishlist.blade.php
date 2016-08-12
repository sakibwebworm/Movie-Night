

@extends('admin')

@section('content')
    @if(Session::has('flash_message'))

        <div class="alert alert-success"id="hide_flash">{{Session::get('flash_message')}}</div>

    @endif
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
                    @foreach($wishlist as $movie)

                        <tr>
                            <td>{{$movie->original_title}}</td>
                            <td>{{$movie->created_at->format('M j, Y')}}</td>
                            {!! Form::open(array('method' => 'delete','action' => ['MoviesController@destruction',$movie->id])) !!}

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
