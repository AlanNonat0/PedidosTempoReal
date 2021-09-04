<!-- Proximos pedidos -->
<div class="col-lg-4 col-md-4 col-sm-12">

    <div class="row">
        <div class="col-12">
           
            <div class="row">
                <div class="col-12">
            <div class="card card-height-lg table-responsive">
                <table class="table table-striped" style="overflow: hidden;">
                    <thead class="text-light font-md bg-brown">
                        <th scope="col">Pedido</th>
                        <th scope="col">Cliente</th>
                    </thead>
                    <tbody class="font-md">
                        @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->client_name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="card card-header-pills bg-brown mx-auto">
                    <div class="card-title p-2 mt-2 mb-2">
                        <p class="text-light font-lg m-auto text-center h-50">Proximos Pedidos</p>

                    </div>
                </div>
            </div>
        </div>
 
</div>
    </div>
</div>
