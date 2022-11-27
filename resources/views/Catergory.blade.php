@extends('structer')

@section('title', 'container')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .row{
            padding-bottom: 50px;
        }

        .head h1{
            background-color: grey;
            color: white;
        }

        .contain1{
            width: 55rem;
            align-items: center;
            justify-content: center;
        }

        .book{
            padding-left: 1rem;
        }

        .card{
            padding: 0;
        }
    </style>
</head>
<body>
   <div class="container">
    <div class="contain1">
        <div class="head">
        <h1>Romance</h1>
        </div>

        <div class="book">
        <div class="row">

            @foreach ($book as $name)
            @if ($name->id == 1 || $name->id == 2 || $name->id == 3)
            <div class="card" style="width: 18rem;">
                <img src={{$name->image}} class="card-img-top" alt="..." style="padding: 0%">
                <div class="card-body">
                 <h2>{{$name->title}}</h2>
                 <h6>by</h6>
                 <p>{{$name->author}}</p>
                 <a href="/Bookdetail" type="button" class="btn btn-primary">Detail</a>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
   </div>

   <div class="container">
    <div class="contain1">
        <div class="head">
        <h1>Food</h1>
        </div>

        <div class="book">
        <div class="row">

            @foreach ($book as $name)
            @if ($name->id == 4 || $name->id == 5 || $name->id == 6)
            <div class="card" style="width: 18rem;">
                <img src={{$name->image}} class="card-img-top" alt="..." style="padding: 0%">
                <div class="card-body">
                 <h2>{{$name->title}}</h2>
                 <h6>by</h6>
                 <p>{{$name->author}}</p>
                 <a href="/Bookdetail" type="button" class="btn btn-primary">Detail</a>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
   </div>
</body>
</html>

@endsection
