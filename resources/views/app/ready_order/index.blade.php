@extends('app.layouts.app')
@section('title', 'Retirada')
@component('app.layouts._components.nav',['order' => '', 'title' => 'Retirada'])
    
@endcomponent
@section('content')

<div class="container-fluid mt-4">

    <div class="row justify-content-center">

        <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="row">
                <div class="col">
                    <div class="card card-height flash card-height-lg">
                        <div class="card-title m-auto">
                            <h1 class="text-center " style="font-size: 200px;">8000</h1>
                            <p class="font-lg font-weight-bold text-center">Silva Nonato</p>
                            
                        </div>
                        <div class="card-img mt-n5"><img src="{{ asset('storage/img/base.png')}}" alt=""  class="img-fluid "></div>

                    </div>
                </div>
            </div>


            <!-- cards bottom -->
            @include('app.ready_order._partials.card_bottom')

            <!-- Proximos pedidos -->
            @include('app.ready_order._partials.next_orders')
        
        </div>
    </div>
</div>


@endsection

@section('script')

@endsection
