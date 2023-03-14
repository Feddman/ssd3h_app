<div class="card text-white bg-primary mb-3 m-4 pr-0" style="max-width: 18rem; width: 25%">
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
