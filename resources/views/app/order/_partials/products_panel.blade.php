@foreach ($products as $product)
<div class="col-6">
    <div class="card mx-2 mt-2">
        <a href="#{{ $product->id}}" class="text-decoration-none text-dark">
            <div class="card-columns">
                <img src="{{ asset('storage/product_img\/'.$product->image)}}" width="100" height="100" alt="{{ $product->name}}" class="card-img card-img-top ">
                <div class="card-title pt-2">
                    <h6 class="font-weight-bold">{{ $product->name}}</h6>
                </div>
                <div class="card-text">
                    <h6>R$ {{ $product->price}}</h6>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach