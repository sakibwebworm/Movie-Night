@extends('homepage')


@section('content')


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
             @foreach($movies as $movie)
              <div class="col-sm-3 text-center">
                   <div class="overlay">
                    <a href="movies/{{$movie->id}}">
                     <img class="img-responsive" src="{{$movie->poster_path}}" alt="">
                    </a>
                   </div>
                    
                </div>
               @endforeach
               
               
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 text-center">
                {!! $movies->render() !!}
            </div>
            
        </div>
               </div>
                </div>
           
        </div>

@endsection