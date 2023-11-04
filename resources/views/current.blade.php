@extends('layouts')
@section('main')

<div class="pagetitle">
    <h1>Stock Details</h1>
  </div><!-- End Page Title -->

<div class="card-body">
    <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Current Stock </h5>
    <!-- Table with hoverable rows -->
    <table class="table table-hover">
      <thead class="table-success">
        <tr>
          <th></th>
          <th scope="col">Sr No</th>
          <th scope="col">Category</th>
          <th scope="col">Item</th>
          <th scope="col">Quantity</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($currents as $stocks)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$stocks->center_id}}</th>
          <td>{{$stocks->item_cat}}</td>
          <td>{{$stocks->item_name}}</td>
          <td>{{$stocks->qnt}}</td>
          <td>{{$stocks->created_at}}</td>
        </tr>
        @endforeach  
      </tbody>
    </table>
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