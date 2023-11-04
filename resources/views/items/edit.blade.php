@extends ("layouts")

@section ("title", "- items")
@section ("page_title", "Add items")
@section ("main")
<div class="card">
    <div class="card-body">
        @include('items.form',['type'=>'edit',"action" => route("items.update", $id)])
    </div>
</div>
@endsection