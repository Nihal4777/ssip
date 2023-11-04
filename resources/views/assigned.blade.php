@extends('layouts')
@section('main')

    <div class="card-body">
    <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> History </h5>
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
    </div>



    <div class="card-body">
    <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Pending Stock</h5>
    <!-- Table with hoverable rows -->
    <form action="updateIds" method="post">
        {{ csrf_field() }}
    <table class="table table-hover">
    <thead class="table-success">
        <tr>
        <th></th>
        <th scope="col">Center Code</th>
        <th scope="col">Category</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
        <th scope="col">Is Received?</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($Pstocks as $stocks)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$stocks->center_id}}</th>
          <td>{{$stocks->item_cat}}</td>
          <td>{{$stocks->item_name}}</td>
          <td>{{$stocks->qnt}}</td>
          <td>{{$stocks->created_at}}</td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="ids[]" value="{{$stocks->id}}" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Recieved
              </label>
            </div>
          </td>
        </tr>
        @endforeach  

    </tbody>

    </table>
    <button type="subimt" class="btn btn-primary">Update Status</button>
</form>
    </div>




    <div class="modal fade" id="grandModal" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
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
    </div>

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