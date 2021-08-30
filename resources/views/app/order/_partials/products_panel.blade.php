@foreach ($products as $product)
    <div class="col-6">
        <div class="card mx-2 mt-2 h-100">

            <form  name="form-Add-Itens" class="form-Add-Itens">

                <div class="row">

                    <div class="col-lg-5 d-none d-lg-block">

                        <img src="{{ asset('storage/product_img\/' . $product->image) }}" alt="{{ $product->name }}"
                            class="card-img img-fill mt-1 ml-1">
                    </div>
                    <div class="col-lg-5 col-md-10">
                        <button type="button" onclick="addList(idProductsCard.value)" class="btn btn-group-lg text-left">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-title">
                                        <h6 class="font-weight-bold">{{ $product->name }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-text">
                                        <h6>R$ {{ $product->price }}</h6>
                                    </div>
                                </div>
                            </div>
                        </button>
                        <input type="hidden" disabled name="idProductsCard" class="idProductsCard"
                            value="{{ $product->id }}">
                    </div>

                    <div class="col-2">
                        <span class="d-none d-lg-block font-weight-bold">{{ $product->id }}</span>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endforeach