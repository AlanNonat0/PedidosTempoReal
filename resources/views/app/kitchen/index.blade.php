@extends('app.layouts.app')
@section('title', 'Cozinha')

@section('content')

    @component('app.layouts._components.nav', ['order' => $orders, 'title' => 'Cozinha'])

    @endcomponent

    <div class="container-fluid preparationOrders">

        <div class="row">

            @foreach ($orders as $order)
                <div class="col-lg-3 col-sm-6 pb-2 mt-4">
                    <div class="card border border-dark">

                        <div class="card-header bg-brown text-white">
                            <div class="row">
                                <div class="col-12">
                                    <span
                                        class="mr-auto "><small>{{ $order->updated_at->format('H:i') }}h</small></span>
                                    <span class="float-right ml-auto">#{{ $order->id }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body card card-height-xl">


                            <h5 class="font-weight-bold text-center">{{ $order->client_name }}</h5>

                            <div class="row  table-responsive font-sm h-75">
                                <div class="col-12">
                                    <table class="table mt-4 table-striped" style="">
                                        <thead>
                                            <th>
                                                Qtd
                                            </th>
                                            <th>Nome</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->products as $product)

                                                <tr>
                                                    <td class="font-weight-bold">{{ $product->pivot->quantity }}</td>
                                                    <td>{{ $product->name }}</td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <h6 class="font-weight-bold">Observações:</h6>
                            <p class="card-text font-weight-bold font-sm text-justify">{{ $order->Note }}</p>

                            <form action="{{ route('app.kitchen.ready') }}" name="orderReady" method="post"
                                class="mt-auto orderReady">
                                @csrf
                                <input type="hidden" name="orderId" class="orderId" value="{{ $order->id }}">
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn-block btn btn-outline-dark btn-sm"
                                        name="btnOrderReady">Pedido Pronto</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>
    
@endsection

@section('script')
    <script src="{{ asset('js/kitchen/orderReadyAjax.js') }}"></script>
    <script src="{{ asset('js/kitchen/webSocketKitchen.js') }}"></script>
@endsection
