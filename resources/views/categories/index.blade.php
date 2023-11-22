@extends ("layouts")

@section ("title", "- Categories")
@section ("page_title", "Categories")

@section ("main")
<style>
    
    .btnadd
    {
        width:50%;
        margin:5px auto;
    }  
    .card-block
    {
        padding:20px;
    } 
    table
    {
        margin:10px auto;
     
    }
    .rspbtn
    {
        margin:5px;
    } 
    tfoot
    {
        text-align:center;
        opacity:0.7;
        background:#01987a0b;
    }
    .general-table tr:hover
    {
        letter-spacing:1px;
        cursor: pointer;
        transition:0.3s;
    }
    .general-table tr:nth-child(even) {
        background-color: #01987a0c;
    } 

    </style>
<div class="card">
    <a class="btn btn-primary ml-auto d-block mt-3 mr-3 btnadd" href="{{route('categories.create')}}"><i class='bi bi-plus-circle'></i> Add</a>
    <div class="card-block">
        <div class="table-responsive dt-responsive">
            <table id="table" class="general-table table-striped table-hover table-bordered text-center">
                <thead  class="table-heading">
                    <tr>
                        <th>Sr No</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $index => $category)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td style="text-align:left;">{{$category->name}}</td>
                        <td>
                            <a href="{{route('categories.edit',$category->id)}}" class='btn rspbtn waves-effect waves-light btn-warning icon-btn btn-icon bs-tooltip' title="Edit">
                                <i class='bi bi-pencil-square'></i>
                            </a>
                            <button href="{{""}}" class='btn rspbtn waves-effect waves-light btn-danger icon-btn btn-icon bs-tooltip delete_btn' title="Delete" data-id="{{$category->id}}">
                                    <i class='bi bi-trash'></i>
                            </button>
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
        $('table').on('click','.delete_btn',function(e){
            id=$(e.currentTarget).data('id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            method:'DELETE',
                            url:"/categories/"+id+'?_token={{csrf_token()}}',
                            success:function(res){
                                if(res.status==true)
                                {
                                    table
                                    .row( $(e.target).parents('tr') )
                                    .remove()
                                    .draw();
                                    swal("Deleted Successfully"); 
                                }
                            }
                        });
                    }
                }).catch(function (error) 
                {
                    swal("Could not change", error.statusText, "error"); 
                });;
        });
    });
</script>
@endpush
