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
            <div class="drinks-list d-flex flex-wrap">
                @foreach($menuItems as $item)
                    @if( $item->category_id == 4 || $item->category_id == 5 )
                        <x-menu-item-card :item="$item"></x-menu-item-card>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="foods">
            <h2>Gerechten</h2>
             <div class="drinks-list d-flex flex-wrap">
                @foreach($menuItems as $item)
                    @if($item->category_id == 1 || $item->category_id == 2 || $item->category_id == 3)
                        <x-menu-item-card :item="$item"></x-menu-item-card>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
