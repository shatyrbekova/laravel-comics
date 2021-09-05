@extends('templates.base')


@section('title', 'HomePage')

@section('main')
     <!-- qui vanno i comics  -->
        <div class="home-page-content">
             <button class="current-series">CURRENT SERIES</button>
            <div class="container">
             
                  @foreach($comics as $comic)

                  <div class="box-comic">
                       <a href="">
                         
                       <img src="{{ $comic['thumb']}} " alt="">
                       <h5>{{$comic["series"]}}</h5>
                    
                       </a>
                    
                  </div>
                     
                  @endforeach
                 
               
            </div>
            
                  <button class="load-box">LOAD MORE</button>
          
                   
        </div>
@endsection