@extends('layouts')
@section('main')

    <div class="card-body">
    {{-- <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> History </h5>
    <!-- Table with hoverable rows -->
    <table class="table table-hover">
    <thead class="table-success">
        <tr>
            <th></th>
            <th scope="col">Center Code</th>
            <th scope="col">Category</th>
            <th scope="col">Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
            </tr>
    </thead>
    <tbody>
        @foreach ($Dstocks as $stocks)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$stocks->center_id}}</th>
          <td>{{$stocks->item_cat}}</td>
          <td>{{$stocks->item_name}}</td>
          <td>{{$stocks->qnt}}</td>
          <td>{{$stocks->updated_at}}</td>
          <td>Done</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div> --}}



    <div class="card-body">
    <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Pending Stock</h5>
    <!-- Table with hoverable rows -->
    <form action="deliveries" method="post">
        {{ csrf_field() }}
    <table class="table table-hover">
    <thead class="table-success">
        <tr>
        <th><i class="bi bi-three-dots-vertical"></i></th>
        <th scope="col">Grant Id.</th>
        <th scope="col">Category</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Fulfilled</th>
        <th scope="col">Date</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Pstocks as $stocks)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$stocks->id}}</th>
          <td>{{$stocks->cname}}</td>
          <td>{{$stocks->itemName}}</td>
          <td>{{$stocks->qnt}}</td>
          <td>{{$stocks->fulfilled}}</td>
          <td>{{$stocks->created_at}}</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-small btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-three-dots-vertical"></i>
              </button>
              <ul class="dropdown-menu">
                <li><button class="dropdown-item" name="complete" value="{{$stocks->id}}"
                 >Mark as delivered</button></li>
                 <li><button type="button" class="dropdown-item"
                  name="partial"
                  data-partial="{{$stocks->id}}"
                  data-max={{$stocks->qnt-$stocks->fulfilled}}     
                  data-bs-toggle="modal"
                  data-bs-target="#partialModal"
                  onclick="updatePartial(event)"
                  >Partially delivered</button></li>
              </ul>
            </div>
          </td>
        </tr>
        @endforeach  

    </tbody>

    </table>
    </form>
    </div>


    <!-- Modal -->
    <div class="modal fade " id="partialModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="deliveries" method="post">
            {{csrf_field()}}
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Partial Delivery</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="partial" id="partial">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Enter Quantity</label>
              <input type="number" id='qntinput' name="qnt" min='1' class="form-control" id="exampleFormControlInput1" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submmit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>
      </div>
    </div>


    {{-- <div class="modal fade" id="grandModal" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalopenLabel">Grant </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul class="list">
            <li class="list-group-item" style="margin-bottom: 10px;">
            <i class="ri-price-tag-3-line"></i> <b>Date </b> : 23-02-2021
            </li>
            <li class="list-group-item" style="margin-bottom: 10px;">
            <i class="ri-price-tag-3-line"></i> <b>Supplier Name : </b> : fdf
            </li>
            <li class="list-group-item" style="margin-bottom: 10px;">
            <i class="ri-price-tag-3-line"></i> <b>Supplier Address : </b> : dfdsf
            </li>

            <table class="table table-hover">
            <thead class="table-success">
                <tr>
                <th scope="col">Category</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Food</td>
                <td>Apples</td>
                <td>453 </td>
                </tr>
                <tr>
                <tr>
                <td>Food</td>
                <td>wheat</td>
                <td>500 </td>
                </tr>
                <tr>
                <tr>
                <td>Food</td>
                <td>wheat</td>
                <td>500 </td>
                </tr>


            </tbody>
            </table>


        </ul><!-- End List group With Icons -->
        </div>
        <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Grant</button>
        </div> -->
    </div>
    </div>
    </div> --}}

    <nav style="float: right;margin: auto 5%;" aria-label="...">
    <ul class="pagination">
    <li class="page-item disabled">
        <span class="page-link">Previous</span>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item " aria-current="page">
        <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
        <a class="page-link" href="#">Next</a>
    </li>
    </ul>
    </nav>
@endsection

@push('scripts')
<script>
  function updatePartial(e)
  {
    $('#partial').val($(e.currentTarget).data('partial'));
    $('#qntinput').prop('max',$(e.currentTarget).data('max'));

  };
$(document).ready(function () { 
  
});
</script>
@endpush