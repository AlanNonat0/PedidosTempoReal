@extends('app.layouts.app')
@section('title', 'Cozinha')

@section('content')

    @include('app.kitchen._partials.nav')

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-4 col-sm-6 pb-2 mt-4">
                <div class="card border border-dark">

                    <div class="card-body card">
                        <h5 class="card-title">Nome da Pessoa<span class="float-right">#001</span></h5>

                        <table class="table mt-4">
                            <thead>
                                <th>
                                    Qtd
                                </th>
                                <th>Nome</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Super burguer</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Combo 1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>chicken</td>
                                </tr>

                            </tbody>
                        </table>
                        <h6>Observações</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et nunc
                            dui. In luctus sed orci et aliquam. Fusce et purus a sem cursus lobortis at sed nibh. Nullam
                            blandit sed sem et consectetur. In euismod suscipit diam, in porta odio pretium nec. Cras tempus
                            placerat pellentesque. Donec consequat porta tortor.</p>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn-block btn btn-outline-dark btn-sm">Pedido Pronto</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    </div>
    </div>
    </div>
@endsection

@section('script')

@endsection
