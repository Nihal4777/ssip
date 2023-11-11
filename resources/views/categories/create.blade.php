@extends ("layouts")

@section ("title", "- Category")
@section ("page_title", "Add Category")
@section ("main")
    <div class="card">
        <div class="card-body">
            @include('categories.form',['type'=>'add',"action" => route("categories.store")])
        </div>
    </div>

@endsection