@extends ("layouts")

@section ("title", "- Categories")
@section ("page_title", "Add Categories")
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
    <h2 class="card-title" style="text-align:center;">Edit Category</h2>
        <div class="card-body">
            @include('categories.form',['type'=>'edit',"action" => route("categories.update", $id)])
        </div>
    </div>
@endsection