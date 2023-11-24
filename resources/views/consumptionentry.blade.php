@extends('layouts')
@section('main')
<head>
<style>
 
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
    float:right;
    /* justify-content: f; */
  }

  .btn-group button {
    margin-right: 16px;
  }
  .card 
  {
    margin-top:30px;

  }

  .doc
  {
    margin:25px 20px;
  }
  .add
  {
    margin:15px;
  }
  @keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.glow-on-hover {
    border: none;
    outline: none;
    color: #fff;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
  color: #000;
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}
</style>
</head>
<div class="pagetitle">
    <h1>Consumption</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <div class="mb-3">

            <div class="card">

              <div class="card-body pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Consumption Entry</h5>
                <p class="text-center small">Enter Anganwadi consumption details</p>
              </div>
{{-- 
              <form class="row g-3 needs-validation" > --}}
                <div class="col-12 p-3">
                  <label for="yourName" class="form-label">Date</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="date" class="form-control text-center" disabled value="{{date('Y-m-d')}}">
                  </div>
                  {{-- <div class="invalid-feedback">Please, select Date!</div> --}}
                </div>
                <div class="col-lg-11">
                  <!-- Customers Card -->
                  <div class="col-xxl col-xl">
                    <div class=" info-card customers-card card-center">
                        <form  method="get" id="firstForm">
                        <div class="card-body text-align: center" style="padding-top: 10px;">
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="item">Category</label>
                              <select class="form-select cat" id="cat" required>
                                <option selected value="">Select Category</option>
                                @foreach ($cat as $c)
                                  <option value='{{$c->id}}'>{{$c->name}}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <label for="item">Item</label>
                              <select class="form-select" id="item" required>
                                <option value="">Select Item</option>
                              </select>
                            </div>
                          </div>   
                        </div> 
                          <div class="form-group" style="margin-top: 20px;">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" placeholder="Enter quantity">
                          </div>
                          <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-primary add glow-on-hover" id="recordButton"  style="float:left;"><i class="bi bi-bag-plus"></i> Voice Record</button>
                            </div>
                            <div class="col-6">
                              <button type="submit" class="btn btn-primary add" id="add-button" style="float:right; width:100px;"><i class="bi bi-bag-plus"></i>   Add</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
                  <form method="post" id="secondForm" enctype="multipart/form-data">
                      <table class="general-table" style="margin-top: 20px;">
                        <thead class="table-heading">
                        <tr>
                          <th>Category</th>
                          <th>Item</th>
                          <th>Quantity</th>
                          <th></th>
                        </tr>
                      </thead>
                    
                        {{ csrf_field() }}
                        <tbody id="item-list">
                          
                        </tbody>
                      </table>
                    </form>
               

                <div class="col-12  doc">
                  <label for="yourName" class="form-label"> <i class="bi bi-file-earmark-post"></i> Supportive documents</label>
                  <div class="col-sm-10">
                    <input type="file" form="secondForm" multiple id="documents" name="documents[]" accept="application/pdf,.doc,.docx,.xls,.csv,.rtf,image/*,video/*" required>
                  </div>
                  <div class="invalid-feedback">Please, select Date!</div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit"  form="secondForm">Submit</button>
                </div>
              {{-- </form> --}}

            </div>
          </div>

          <!-- Website Traffic -->
          <div class="card">

          </div>
        </div><!-- End Website Traffic -->
      </div><!-- End Right side columns -->

    </div>
</section>
<div id="controls" class="d-none">
  <button id="recordButton">Record</button>
  {{-- <button id="pauseButton" disabled>Pause</button> --}}
  {{-- <button id="stopButton" disabled>Stop</button> --}}
 </div>
 <div id="formats" class="d-none">Format: start recording to see sample rate</div>
 <p class="d-none"><strong>Recordings:</strong></p>
 <ol id="recordingsList" class="d-none"></ol>
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
    $('#recordButton').click(function(e){
      
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
    <script src="/assets/recorder.js"></script>
    <script src="/assets/back.js"></script>
@endpush
