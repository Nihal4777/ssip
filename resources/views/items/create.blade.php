@extends ("layouts")

@section ("title", "- items")
@section ("page_title", "Add items")
@section ("content")
    <div class="card">
        <div class="card-body">
            @include('items.form',['type'=>'add',"action" => route("items.store")])
        </div>
    </div>

@endsection