<form class="form input-group-prepend" name="form-chk-search" id="form-chk-search">
    @csrf
    <input type="text" name="inputChkSearch" id="inputChkSearch" class="form-control form-check-inline"
        placeholder="Nome ou Codigo do Produto" />
    <button type="submit" class="form-control btn btn-dark btn-wd"
        name="chk-search">Buscar</button>
</form>