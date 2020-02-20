@extends('layouts.mainlayout')
@section('content')
    <div class="container">
        <h1>"{{$student[0]->Fname}}"</h1>
    <div class="carousel-wrapper">
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/pic1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/pic2.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/pic3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        </div>
    </div>
    <div class="cat">
        <a href="/apply">
            <button type="button" class="btn btn-success">Apply now</button>
        </a>
        
    </div>

    </div>

@endsection
