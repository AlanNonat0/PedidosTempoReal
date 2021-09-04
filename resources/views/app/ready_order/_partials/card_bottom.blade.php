<!-- cards bottom -->
<div class="row mt-3">
    @foreach ($ordersReady as $orderReady)
    @if ($orderReady->id != $ordersReady->first()->id)
        <div class="col">
        <div class="card bg-warning">
            <div class="card-title m-auto">
                <h1 class="text-center m-auto">{{$orderReady->id}}</h1>
                <p class="font-md font-weight-bold text-center">{{$orderReady->client_name}}</p>
            </div>

            </div>
        </div>  
    
        
    @endif
      
    @endforeach
</div>
</div>
