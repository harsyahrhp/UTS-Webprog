@extends('structer')

@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <style>
        .row{
            padding-bottom: 50px;
        }

        .contain1{
            width: 55rem;
            align-items: center;
            justify-content: center;
        }

        .card{
            padding: 0;
        }

        .head{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: grey;
            color: white;
            height: 200px;
            padding-left: 2rem;
        }

        .head img{
            width: 150px;
            height: 120px;
            margin-right: 2rem;
        }
    </style>
</head>
<body>
   <div class="container">
    <div class="contain1">
        @foreach ($publisher as $pub)
        <div class="head">
            <div class="text">
                <h4>{{$pub->name}}</h4>
                <h4>{{$pub->address}}</h4>
                <h4>{{$pub->phone}}</h4>
                <h4>{{$pub->email}}</h4>
            </div>

            <div class="logo">
                <img src={{$pub->image}} alt="">
            </div>

        </div>

        <div class="books">
        <div class="row">
            @foreach ($pub->books as $bpub)
            <div class="card" style="width: 18rem;">
                <img src={{$bpub->image}} class="card-img-top" alt="..." style="padding: 0%">
                <div class="card-body">
                 <h2>{{$bpub->title}}</h2>
                 <h6>by</h6>
                 <p>{{$bpub->author}}</p>
                 <a href="/Bookdetail" type="button" class="btn btn-primary">Detail</a>

                </div>
            </div>
            @endforeach



            @endforeach

        </div>
    </div>
   </div>
   </div>
</body>
</html>

@endsection
