@extends ("layouts")

@section ("main")

<div class="card">
    <div class="card-block">
        @if($type == 'employee')    
            @if(!isset($employees->id))    
                {{redirect()->back()}}
            @else
                <form action="/deliveries/listing/{{$employees->id}}" method="get">
            @endif
        @else
            <form action="{{route('deliveries.index2')}}" method="get">
        @endif
            @csrf
            <div class="row">
                @if($type == 'master')     
                    <div class="col-md-3">                      
                        <label>Employee</label>
                        <select class="default-select form-control mb-1" name="employee_id">
                            <option value="0" @if($request->employee_id == '0') selected @endif>All</option>
                            @foreach ($employees as $emp)
                                <option value="{{$emp->id}}" @if($request->employee_id == $emp->id) selected @endif>{{$emp->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div class="col-md-3">
                    <p class="mb-1 mt-1">Date Range</p>
                    {{-- value="01/01/2015 - 01/31/2015" --}}
                    @php
                        if(!is_null($request->daterange)){
                            $dates = explode("-", $request->daterange);
                            $start_date=\Carbon\Carbon::parse(trim($dates[0]))->format('m-d-Y');
                            $end_date=\Carbon\Carbon::parse(trim($dates[1]))->format('m-d-Y');
                        }
                        $start=\Carbon\Carbon::now()->subMonths(3)->format('m/d/Y');
                        $end=\Carbon\Carbon::now()->format('m/d/Y');
                    @endphp
                    <input class="form-control input-daterange-datepicker" type="text" name="daterange" @if(!is_null($request->daterange)) value="{{$start_date. ' - '.$end_date}}" @else value="{{$start.' - '.$end}}" @endif/>
                </div>
                <div class="col-md-1">
                    <p class="mb-1 mt-1">&nbsp;</p>
                    <button class="btn btn-success mb-2" style="border-radius:4px;">Filter</button>
                </div>
                <div class="col-md-2">
                    <p class="mb-1 mt-1">&nbsp;</p>
                    <a href="@if($type == 'master') {{ route('deliveries.index2') }} @else {{ route('deliveries.listing', $employees->id) }} @endif" class='btn btn-warning mb-2' style="border-radius:4px;">
                        Clear Filter
                    </a>
                </div>
                <div class="col-md-2">
                    <p class="mb-1 mt-1">&nbsp;</p>
                    <a href="@if($type == 'master') {{ route('deliveries.reportsFilter') }} @else {{ route('deliveries.reportsFilter', $employees->id) }} @endif" class='btn btn-primary mb-2' style="border-radius:4px;">
                        Generate Reports
                    </a>
                </div>
            </div>
        </form>
    </div>        
</div>            

<div class="card">
    <div class="card-block">
        <div class="table-responsive dt-responsive">
            <table id="table" class="table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Order Number</th>
                        <th>Serial Number</th>
                        @if($type == 'master')
                            <th>Employee</th>
                        @endif
                        <th>Beneficiary Name</th>
                        <th>Location</th>
                        @if($type == 'employee')
                            <th>Delivery Time</th>
                        @endif
                        <th>Delivery Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach ($deliveries as $index => $del)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td><a href="{{ route('deliveries.show', $del->id) }}" class="see_details"> {{$del->order_no}}</a></td>
                            <td><a href="{{ route('deliveries.show', $del->id) }}" class="see_details">{{$del->serial_no}}</a></td>
                            @if($type == 'master')
                                <td>{{$del->employee->name}}</td>
                            @endif
                            <td>{{$del->name}}</td>
                            <td>
                                @if(!empty($del->village))
                                    {{$del->village->name}}, 
                                @endif
                                @if(!empty($del->taluka->name))
                                    {{$del->taluka->name}}
                                @endif
                            </td>
                            @if($type == 'employee')
                                <td>
                                    {{ \Carbon\Carbon::parse(trim($del->delivery_time))->format('g:i A') }}
                                </td>
                            @endif
                            <td>
                                {{ \Carbon\Carbon::parse(trim($del->delivery_date))->format('d/m/Y') }}
                            </td>
                            <td>
                                <a href="{{ route('deliveries.show', $del->id) }}" class='btn waves-effect waves-light btn-info icon-btn btn-icon bs-tooltip ml-2' title='View'>
                                    <i class="icofont icofont-eye-alt"></i>
                                </a>
                                <a href="{{ route('deliveries.pdfReport', $del->id) }}" target="_blank" class='btn waves-effect waves-light btn-danger icon-btn btn-icon bs-tooltip ml-2' title='PDFReport' name="pdf">
                                    <i class="icofont icofont-lg icofont-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr No.</th>
                        <th>Order Number</th>
                        <th>Serial Number</th>
                        @if($type == 'master')
                            <th>Employee</th>
                        @endif
                        <th>Beneficiary Name</th>
                        <th>Location</th>
                        @if($type == 'employee')
                            <th>Delivery Time</th>
                        @endif
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            {!! $deliveries->links() !!}
        </div>
    </div>
</div>
@endsection

@push("styles")
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/datatables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert.css') }}">

<link href="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css" rel="stylesheet" type="text/css"/> -->
<style>
  #employeeFilter{
    display: inline;
    width: 200px;
  }
  /* @media only screen and (min-width: 768px) {
  .pdf-btn {
    margin-left: 3rem!important;
  }
} */
</style>
@endpush

@push("scripts")
<script src="{{ asset('assets/js/datatables/jquery.datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/js/datatables/datatables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js')}}"></script>

<script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- pickdate -->
<script src="{{ asset('assets/vendor/pickadate/picker.js') }}"></script>
<script src="{{ asset('assets/vendor/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('assets/vendor/pickadate/picker.date.js') }}"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script> -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script> -->

<script type="text/javascript">
    
    $(document).ready(function(){
        var table = $("#table").DataTable({
            language: {
                emptyTable: "No Data Found"
            },
            paging: false,
            info: false,
            columnDefs: [
                { "width": "5%", "targets": 1 },
                { "width": "3%", "targets": 2 },
            ]
        });
    });
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });
        $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
        });
        $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
        });
    });
</script>
@endpush
