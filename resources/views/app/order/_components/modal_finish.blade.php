<div class="modal fade" id="modalFinish" tabindex="-1" aria-labelledby="endOrder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row">
                    <h4 class=" ml-2 modal-title font-weight-bold" id="endOrder">Finalizar Pedido</h4>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <Form id="finishOrder" name="finishOrder" method="get" action="javascript:void(0)">
                   @csrf
                   <h1 class=" modal-title ml-auto">R$ <span id="totalmodal">0.00</span></h1>
                   <h3 class="mt-2">Forma de Pagamento</h3>
                <div class="row mt-2">

                    @foreach ($payments as $payment)
                    <div class="col-4">
                        <input type="radio" name="payment" onclick="cashSelected()" id="payment{{$payment->id}}" value="{{$payment->id}}" {{$payment->id == 1? 'checked': null}}>
                        <label for="payment{{$payment->id}}">{{$payment->type}}</label>
                    </div>
                    @endforeach
                    
                </div>
                <div class="row" id="cashSelected">
                    <div class="col-2"><span class="font-weight-bold">R$</span></div>
                    <div class="col-10"><input type="text" name="cash" id="cash" class="form-control" placeholder="Valor pago"></div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-12">
                        <label for="clientName" >Nome:</label>
                        <input type="text" name="clientName" id="clientName" class="form-control" placeholder="Nome do Cliente">

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="note">Observação:</label>
                        <input type="text" name="note" id="note" class="form-control" placeholder="Ex: Sem Cebola">

                    </div>
                </div>

            </Form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-primary" id="btnFinish" form="finishOrder">Finalizar</button>
            </div>
        </div>
    </div>
</div>
