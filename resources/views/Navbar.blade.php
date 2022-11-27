<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .name{
            background-color: #fec107;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .navbar{
            display:flex;
            align-content: center;
            justify-content: center;
        }

        .navbar a{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2rem;
            list-style-type: none;
            text-decoration: none;
        }

        .navbar a{
            text-decoration: none;
        }
    </style>

</head>
<body>
    <div class="name">
            <h1>Giant Book Suplier</h1>
    </div>

    <div class="navbar">
            <ul style="display:flex; align-items: center; justify-content: center; gap: 2rem;">
                <a href="/">Home</a>
                    <div class="dropdown-center">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="gap: 0">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($categorie as $categories)
                            <li><a class="dropdown-item" href="/Catergory">{{$categories->name}}</a></li>

                            @endforeach
                         </ul>
                      </div>
                            {{-- @foreach ($categorie as $categories) --}}
                            <a href="/Catergory/1">Romance</a>
                            <a href="/Catergory/2">Food</a>
                            {{-- @endforeach --}}
                <a href="/Publisherdetail">Publisher</a>
                <a href="/contact">Contact</a>
            </ul>
    </div>

    {{-- <div class="navbar">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/" style="color: blue">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: blue">
                      Category
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Sport</a></li>
                      <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/publisher" style="color: blue">Publisher</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact" style="color: blue">Contact</a>
                      </li>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
