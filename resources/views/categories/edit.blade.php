@extends ("layouts")

@section ("title", "- Categories")
@section ("page_title", "Add Categories")
@section ("main")
    <div class="card">
        <div class="card-body">
            @include('categories.form',['type'=>'edit',"action" => route("categories.update", $id)])
        </div>
    </div>
@endsection