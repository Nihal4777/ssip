@extends('layouts')
@section('main')
<head>
  <style>
    
  
    tfoot
    {
        text-align:center;
        opacity:0.7;
        background:#01987a0b;
    }
    .general-table tr:hover
    {
        
      background:#01987a34;
        transition:0.3s;
        cursor: pointer;
    }

  </style>
</head>
<div class="pagetitle">
    <h1>Stock Details</h1>
  </div><!-- End Page Title -->

<div class="card-body table-responsive">
    <h5 class="card-title">  <i class="bi bi-inboxes-fill"></i> Current Stock </h5>
    <!-- Table with hoverable rows -->
    <table class="general-table">
      <thead class="table-heading">
        <tr>
          <th></th>
          <th scope="col">Sr No</th>
          <th scope="col">Category</th>
          <th scope="col">Item</th>
          <th scope="col">Quantity</th>
          <th scope="col">Last Updated  </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($stocks as $i=>$stock)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$i+1}}</th>
          <td>{{$stock->cname}}</td>
          <td>{{$stock->itemName}}</td>
          <td>{{$stock->qnt}}</td>
          <td>{{$stock->updated_at}}</td>
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
