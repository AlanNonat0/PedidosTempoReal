@extends('app.layouts.app')
@section('title', 'Retirada')
@component('app.layouts._components.nav',['order' => '', 'title' => 'Retirada'])

@endcomponent
@section('content')

<div class="container-fluid mt-4" id="orderReady">

    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="row">
                <div class="col">
                    <div class="card card-height flash card-height-lg">
                        <div class="card-title m-auto">
                            @if (isset($ordersReady->first()->id) && is_object($ordersReady->first()))

                            <p class="font-lg font-weight-bold text-center text-hide">Pedido Número</p>
                            <h1 class="text-center font-xl-II" >{{ $ordersReady->first()->id }}</h1>
                            <p class="font-lg font-weight-bold text-center">{{ $ordersReady->first()->client_name }}</p>

                            @else
                                <h1 class="font-lg font-xl-I mt-5 pt-5">Sem pedidos</h1>
                            @endif


                        </div>
                        <div class="d-flex mt-n5 d-none d-sm-none d-md-block mx-auto"><img src="{{ asset('storage/img/base.png')}}" alt=""  class=" h-75 card-img"></div>

                    </div>
                </div>
            </div>


            <!-- cards bottom -->
            @component('app.ready_order._partials.card_bottom', ['ordersReady' => $ordersReady])
            @endcomponent
            <!-- Proximos pedidos -->
            @component('app.ready_order._partials.next_orders', ['orders' => $orders])
            @endcomponent

        </div>
    </div>
</div>


@endsection

@section('script')
<script src="{{ asset('js/ready_order/eventListenerWebSocketOutPanel.js') }}"></script>

@endsection
