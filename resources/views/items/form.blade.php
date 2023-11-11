<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @if($type == "edit")
    @method("PUT")
    @endif
    {{ csrf_field() }}
   
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Item Type</label>
                {{-- <input type="text" class="form-control" name="item_type" value="{{old('item_type',$category->type)}}" placeholder="Category Name"> --}}

                @if($type=="edit")
                <select class="form-select" name="category_id" required>
                    <option value="">Choose Category</option>
                    @foreach ($categories as $cat)
                        @if($category->id==$cat->id)
                            <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                        @else
                             <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endif
                    @endforeach
                </select>
                @else
                <select class="form-select" name="category_id" required>
                    <option value="">Choose Category</option>
                    @foreach ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                @endif


            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Item Name</label>
                <input type="text" class="form-control" name="category_name" value="{{old('category_name',$category->name)}}" placeholder="Item Name" required>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">{{ $type == "add" ? "Add" : "Update" }}</button>
</form>