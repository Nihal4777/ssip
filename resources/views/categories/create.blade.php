@extends ("layouts")

@section ("title", "- Category")
@section ("page_title", "Add Category")
@section ("main")
    <head>
        <style>
            .card-body form label
            {
                font-size:16px;
            }
            .card-body form input
            {
                margin:5px auto;    
            }
            .card-body button
            {
                margin:10px auto;
            }
        </style>
    </head>
    <div class="card">
        <h2 class="card-title" style="text-align:center;">Add Category</h2>
        <div class="card-body">
            @include('categories.form',['type'=>'add',"action" => route("categories.store")])
        </div>
    </div>

@endsection