<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Onze Menukaart</h1>
        <div class="drinks">
            <h2>Dranken</h2>
            <div class="drinks-list d-flex justify-content-between flex-wrap">

                @foreach($menuItems as $item)
                    <div class="card text-white bg-primary mb-3 mr-0 pr-0" style="max-width: 18rem; width: 25%">
                        <div class="card-header"> {{ $item->category->name }} </div>
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <h4 class="card-title"> {{$item->name}} </h4>
                                <p class="card-text"> {{$item->description}} </p>
                            </div>
                            <p class="card-price display-5" style="text-align: right; transform: rotate(90deg);">{{ $item->price }} </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-success" style="width: 100%; font-weight: bold; font-size: 1.5em">Bestel</button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="foods">
            <h2>Gerechten</h2>
        </div>
    </div>
</body>
</html>
