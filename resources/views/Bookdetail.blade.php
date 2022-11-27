@extends("structer")

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
        .head h4{
            background-color: grey;
            color: white;
            width: 18rem;
        }

        .contain1{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bookdtl{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .title{
            display: flex;
        }

        .author{
            display: flex;
        }

        .year{
            display: flex;
        }

        .publisher{
            display: flex;
        }

        .container{
            padding-bottom: 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contain1">
            <div class="head">
            <h4>Book Detail</h4>
            </div>
        </div>


            <div class="bookdtl">
                @foreach ($bookdetail as $books)

                <div class="card" style="width: 18rem;">
                    <img src="{{$books->image}}" class="card-img-top" alt="..." style="padding: 0%">
                    <div class="card-body">
                        <div class="title">
                            <p>Title :</p>
                            <p>{{$books->title}}</p>
                        </div>

                        <div class="author">
                            <p>Author :</p>
                            <p>{{$books->author}}</p>
                        </div>

                        <div class="publisher">
                            <p>Publisher :</p>
                            <p>{{$books->publisher_id}}</p>
                        </div>

                        <div class="year">
                            <p>Year :</p>
                            <p>{{$books->year}}</p>
                        </div>

                        <div class="sinopsis">
                            <p>Sinopsis :</p>
                            <p>{{$books->synopsis}}</p>
                        </div>

                    </div>
            </div>
            @endforeach
    </div>
    </div>

</body>
</html>



@endsection
