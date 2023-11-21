@extends ("layouts")

@section ("title", "- items")
@section ("page_title", "Add items")
@section ("main")
<style>
    .card-title
    {
       text-align:center;
    }
    .card-body button
    {
        margin:10px auto;
    }
        </style>
<div class="card">
    <h2 class="card-title">Edit suppliers</h2>
    <div class="card-body">
        @include('items.form',['type'=>'edit',"action" => route("items.update", $id)])
    </div>
</div>
@endsection