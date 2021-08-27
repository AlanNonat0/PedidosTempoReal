@extends('app.layouts.app')
@section('title', 'Checkout')
@section('content')

<div class="container-fluid mt-4">

    <div class="row">

        <div class="col-md-6">

            @include('app.order._partials.description')

            @include('app.order._partials.price')
            
   
        </div>

        <!-- Area de produtos -->
        <div class="col-md-6">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-height-lg">
                        <!-- Mais Vendidos -->

                        <div class="row" id="panel">
                    
                            @include('app.order._partials.products_panel')

                        </div>

                    </div>

                    <hr class="mt-5">

                    <div class="row">

                        <div class="col-12 mt-3">

                            @include('app.order._components.form_search')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/search_ajax.js') }}"></script>
@endsection
