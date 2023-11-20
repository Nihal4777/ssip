@extends ("layouts")

@section ("title", "- items")
@section ("page_title", "Add items")
@section ("main")
    <head>
        <style>
            form button{
                margin:20px;
            }
        </style>
    </head>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title"> <i class="bi bi-journal-plus"></i> Add suppliers</h2>
            @include('items.form',['type'=>'add',"action" => route("items.store")])
        </div>
    </div>
@endsection