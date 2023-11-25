@extends('layouts')
@section('main')
<head>
<style>
     .general-table td
    {
    width:auto;
    padding:10px 4px;
    height:auto;
    
    }
    tfoot
    {
        text-align:center;
        opacity:0.7;
        background:#01987a0b;
    }
            </style></head>
  <div class="container-resp table-responsive dt-responsive">
    <h5 class="card-title">  <i class="bi bi-pin-map-fill"></i> Past Deliveries</h5>
    <!-- Table with hoverable rows -->
    <form action="deliveries" method="post">
        {{ csrf_field() }}
    <table class="general-table">
    <thead class="table-heading">
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
