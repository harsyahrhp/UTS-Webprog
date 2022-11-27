@extends('structer')

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
        <h1>Book List</h1>
        </div>

        <div class="book">
        <div class="row">
            @foreach ($book as $books)
            <div class="card" style="width: 18rem;">
                <img src={{$books->image}} class="card-img-top" alt="..." style="padding: 0%">
                <div class="card-body">
                 <h2>{{$books->title}}</h2>
                 <h6>by</h6>
                 <p>{{$books->author}}</p>
                 <a href="/Bookdetail/{{$books->id}}" type="button" class="btn btn-primary">Detail</a>
                 {{-- <a button type="button" class="btn btn-primary">Detail</button> --}}
                </div>
            </div>
            @endforeach
            {{-- <div class="card" style="width: 18rem;">
                <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1529766227/dilan1_rgsiyd.jpg" class="card-img-top" alt="..." style="padding: 0%">
                <div class="card-body">
                 <h2>Dilan 1990</h2>
                 <h6>by</h6>
                 <p>pidi baiq</p>
                 <button type="button" class="btn btn-primary">Detail</button>
                </div>
            </div>

        <div class="card" style="width: 18rem;">
            <img src="https://assets-a1.kompasiana.com/items/album/2019/03/25/img-20190325-wa0009-5c98787495760e3f4d368524.jpg?t=o&v=770" class="card-img-top" alt="...">
            <div class="card-body">
                <h2>Milea</h2>
                <h6>by</h6>
                <p>pidi baiq</p>
                <button type="button" class="btn btn-primary">Detail</button>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="https://www.bukukita.com/babacms/displaybuku/86106_f.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2>Dilan 1991</h2>
                <h6>by</h6>
                <p>pidi baiq</p>
                <button type="button" class="btn btn-primary">Detail</button>
            </div>
          </div>
        </div> --}}
        </div>
    </div>
   </div>
</body>
</html>

@endsection
