@extends('layouts')
@section('main')

    <head>
        <style>
body
{
    background-color:black;
}
        </style>

    </head>
    <div class="card-body">
    <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Past Deliveries</h5>
    <!-- Table with hoverable rows -->
    <form action="deliveries" method="post">
        {{ csrf_field() }}
    <table class="table table-hover">
    <thead class="table-success">
        <tr>
        <th><i class="bi bi-three-dots-vertical"></i></th>
        <th scope="col">Delivery Id.</th>
        <th scope="col">Grant Id.</th>
        <th scope="col">Category</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deliveries as $delivery)
        <tr>
          <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
          <th scope="row">{{$delivery->id}}</th>
          <td>{{$delivery->gid}}</td>
          <td>{{$delivery->cname}}</td>
          <td>{{$delivery->itemName}}</td>
          <td>{{$delivery->qnt}}</td>
          <td>{{$delivery->created_at}}</td>
        </tr>
        @endforeach  

    </tbody>

    </table>
    </form>
    </div>   

@endsection

@push('scripts')
<script>
$(document).ready(function () { 
  
});
</script>
@endpush