@extends ("layouts")

@section ("title", "- items")
@section ("page_title", "items")

@section ("main")

<div class="card">
    <a class="btn btn-primary ml-auto d-block mt-3 mr-3" href="{{route('items.create')}}">Add</a>
    <div class="card-block">
        <div class="table-responsive dt-responsive">
            <table id="table" class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Category</th>
                        <th>items Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$category->type}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                        <form action="{{route('items.destroy',$category->id)}}" method="delete">
                            @method('DELETE')
                            <a href="{{route('items.edit',$category->id)}}" class='btn waves-effect waves-light btn-warning icon-btn btn-icon bs-tooltip' title="Edit">
                                <i class='icofont icofont-edit'></i>
                            </a>
                                <a href="" class='btn waves-effect waves-light btn-danger icon-btn btn-icon bs-tooltip' title="Delete">
                                    <i class='icofont icofont-close'></i>
                                </a>
                        </form>
                            {{-- <button href="{{""}}" class='btn waves-effect waves-light btn-danger icon-btn btn-icon bs-tooltip delete_btn' title="Delete" data-id="{{$category->id}}">
                                <i class='icofont icofont-close'></i>
                            </button> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr No</th>
                        <th>Diagram Name</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection

@push("styles")
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/datatables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">
@endpush

@push("scripts")
<script src="{{ asset('assets/js/datatables/jquery.datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/datatables.responsive.min.js')}}"></script>
{{-- <script src="{{ asset('assets/js/sweetalert.min.js')}}"></script> --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
var table;
var id;
    $(document).ready(function(){
        console.log("DDA");
        table = $("#table").DataTable({
            oLanguage: {
                sEmptyTable: "No data found",
            },
            
            columnDefs: [
                { targets: [-1], orderable: false },
            //     { width: "5%", targets: 0},
            //     { width: "5%", targets: 1},
            //     { width: "15%", targets: 3},
            //     { width: "5%", targets: 5},
            ],
            
        });
        // $('table').on('click','.delete_btn',function(e){
        //     id=$(e.currentTarget).data('id');
        //     swal({
        //         title: "Are you sure?",
        //         text: "Once deleted, you will not be able to recover this!",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true,
        //         })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 $.ajax({
        //                     method:'DELETE',
        //                     url:"/items /"+id+'?_token={{csrf_token()}}',
        //                     success:function(res){
        //                         if(res.status==true)
        //                         {
        //                             table
        //                             .row( $(e.target).parents('tr') )
        //                             .remove()
        //                             .draw();
        //                             swal("Deleted Successfully"); 
        //                         }
        //                     }
        //                 });
        //             }
        //         }).catch(function (error) 
        //         {
        //             swal("Could not change", error.statusText, "error"); 
        //         });;
        // });
    });
</script>
@endpush
