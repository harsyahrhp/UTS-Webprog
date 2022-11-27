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
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contain1{
            align-items: center;
            justify-content: center;
        }

        .book{
            display: flex;
            align-items: center;
            justify-content: center;
            padding-bottom: 2rem;
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
        <h1>Contact</h1>
        </div>

        <div class="book">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h2>Store address</h2>
                <p>jalan pembangunan baru raya</p>
                <p>bintaro, tanggerang selatan</p>
                <p>Indonesia</p>

                <h2>Open Daily</h2>
                <p>08.00-20.00</p>

                <h2>Contact</h2>
                <p>phone : 021212442</p>
                <p>Email : Happybokstore@gmail.com</p>
            </div>
            </div>

        </div>
    </div>
   </div>
</body>
</html>

@endsection
