@extends('layouts')
<head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap');
   
  .card-body {
    padding: 16px;
  }

  .input-group {
    display: flex;
    align-items: center;
  }

  .input-group input {
    flex: 1;
  }

  .input-group button {
    margin-left: 16px;
  }

  .btn-group {
    padding-top: 10px;
  }

  .btn-group {
    justify-content: flex-start;
  }

  .btn-group button {
    margin-right: 16px;
  }
  
  .greybutton
    {
    background:none;
    border:none;
    color:blue;
    opacity: 0.7;
    }
    .custom
    {
    background-color:#01987A;
    }
  
    
    tfoot
    {
        text-align:center;
        opacity:0.7;
        background:#01987a0b;
    }
    .general-table tr:hover
    {
        background:#01987a34;
        transition:0.3s;
    }
</style>
</head>

@section('main')
<div class="pagetitle">
    <h1>Consumption</h1>
</div><!-- End Page Title -->

<section class="section dashboard"  style=" font-family: 'Montserrat', sans-serif;">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
<!--                 <h5 class="card-title text-center pb-0 fs-4">Consumption History</h5> -->
                {{-- <p class="text-center small">Enter Anganwadi consumption details</p> --}}
              </div>
              <div class="row">
                <div class="col-12">
                  <label for="yourName" class="form-label">Date Range</label>
                  <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-10 col-lg-11">
                        {{-- <input type="date" name="date" class="form-control text-center" value="{{$date}}"> --}}

                        <input type="hidden" name="start" id="startdate" />
                        <input type="hidden" name="end"  id="enddate" />
                        <input type="text" name="daterange" value="{{$date}} - {{$enddate}}" />
                      </div>
                      <div class="col-2 col-lg-1">
                        <button class="btn btn-primary">
                          <i class="bi bi-search"></i>
                        </button>
                      </div>
                    </div>
                </form>
                </div>
               <div class="col-lg-12 my-4 container-resp table-responsive dt-responsive">
                  <table class="general-table" style="letter-spacing:1px;  font-family: 'Montserrat', sans-serif;
    width:100%;
    margin:20px auto;
    
    height:auto;">
                    <thead class="table-heading" style=" background-color:#e4755cbe;
    letter-spacing:1px;
    height: 40px;
    text-align:center;
    width:fixed;
    color:white;">    
                  
                      <tr>
                        <th></th>
                        <th scope="col">Sr No</th>
                        <th scope="col">Category</th>
                        <th scope="col">Item</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Entered at</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($consumptions as $i=>$consumption)
                     <tr style=" height:auto;  
    border:2px solid #01987a0c;
    text-align:center;">
                        <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
                        <th scope="row">{{$i+1}}</th>
                        <td style="  width:auto;
    padding:10px 4px;
    height:auto;">{{$consumption->cname}}</td>
                        <td>{{$consumption->itemName}}</td>
                        <td>{{$consumption->qnt}}</td>
                        <td>{{$consumption->created_at}}</td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>


                </div>


                
              </div>
              
            </div>
          </div>

          <!-- Website Traffic -->
          <div class="card">
            <div class="card-header">
              Documents
            </div>
            <div class="col-lg-11 my-4">
              <ul class="list-group list-group-horizontal">
                @foreach ($cds as $cd)
                <li class=" list-group-item document " style="border:1px solid rgba(127, 142, 253, 0.854);font-weight:bold;display:block;width:40%;margin:5px 10px;display:inline-block;">
               
                <i class="bi bi-file-earmark-text" style="color:rgba(127, 142, 253, 0.854);font-size: 20px;"></i>
                <a href="/{{$cd->file}}" target="_blank" style="color:rgba(127, 142, 253, 0.854);" rel="noopener noreferrer">  
                  {{basename($cd->file)}}</a></li>
                @endforeach
              </ul>


            </div>
          </div>
        </div><!-- End Website Traffic -->



      </div><!-- End Right side columns -->

    </div>
</section>
@endsection
@push('scripts')
    <script>

$(document).ready(function () {  
    $('.cat').on('change', function () {
        var selectVal = this.selectedOptions[0].value;
        $.ajax({
            url: `/api/get_cat?id=${selectVal}`,
            type: "get",
            success: function(d) {
                $('#item').empty();
                $('#item').append(`<option value="">Select Item</option>`);
                d.data.forEach(element => {
                  console.log(element)
                  $('#item').append(`<option value="${element.id}">${element.name}</option>`);
                });
            }
        });
        
    });
    const firstForm = document.getElementById('firstForm');
    const removeButton = document.getElementById('remove-button');
    const itemList = document.getElementById('item-list');
    firstForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const item = document.getElementById('item');
      const itemName = item.selectedOptions[0].innerText;
      const itemId = item.value;
      const catname = document.getElementById('cat').selectedOptions[0].innerText;
      const quantity = document.getElementById('quantity').value;

      if (itemName && quantity && catname) {
        const tr = document.createElement('tr');
        tr.innerHTML = `
        <input type="hidden" name="item[]" value="${itemId}">
        <input type="hidden" name="qnt[]" value="${quantity}">
        <td>${catname}</td>
        <td>${itemName}</td>
        <td>${quantity}</td>
        <td><button class="btn btn-sm itemdelete" type="button"><i class="bi bi-x-lg text-danger"></i></button></td>
        `;
        itemList.appendChild(tr);



        // items.push({ name: itemName, quantity: quantity, cat: catname,itemId:itemId });

        // Clear the input fields after adding an item.
        document.getElementById('item').value = '';
        document.getElementById('quantity').value = '';
        // document.getElementById('cat').value = '';
      }
    });

    $('#item-list').on('click','.itemdelete',function(e){
      $(this).parent().parent().remove();
    })
  });
    </script>
    
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
      $(function() {
        $('input[name="daterange"]').daterangepicker({
          opens: 'left'
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

          $(startdate).val(start.format('YYYY-MM-DD'));
          $(enddate).val(end.format('YYYY-MM-DD'));
        });
      });
      </script>
@endpush
