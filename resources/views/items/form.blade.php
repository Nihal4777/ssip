<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @if($type == "edit")
    @method("PUT")
    @endif
    {{ csrf_field() }}
   
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Item Type</label>
                <input type="text" class="form-control" name="item_type" value="{{old('item_type',$category->type)}}" placeholder="Category Name">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Iteam Name</label>
                <input type="text" class="form-control" name="category_name" value="{{old('category_name',$category->name)}}" placeholder="Item Name">
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">{{ $type == "add" ? "Add" : "Update" }}</button>
</form>