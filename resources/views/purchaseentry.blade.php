@extends('layouts')
@push('styles')
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
    justify-content: flex-start;
  }

  .btn-group button {
    margin-right: 16px;
  }
</style>
@endpush

@section('main')
<div class="pagetitle">
    <h1>Purchase</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">purchase Entry</h5>
                <p class="text-center small">Enter Anganwadi purchase details</p>
              </div>
{{-- 
              <form class="row g-3 needs-validation" > --}}
                <div class="col-12">
                  <label for="yourName" class="form-label">Date</label>
                  <div class="col-sm-10 col-lg-11">
                    <input type="date" class="form-control text-center" disabled value="{{date('Y-m-d')}}">
                  </div>
                  {{-- <div class="invalid-feedback">Please, select Date!</div> --}}
                </div>
                <div class="col-lg-11">
                  <!-- Customers Card -->
                  <div class="col-xxl col-xl">
                    <div class="card info-card customers-card card-center">
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
                          <div class="btn-group d-flex justify-content-start" style="padding-top: 20px;">
                            <button type="submit" class="btn btn-primary" id="add-button">Add</button>
                            {{-- <button type="button" class="btn btn-danger" id="remove-button">Remove</button> --}}
                          </div>
                        </div>
                      </form>
                    </div>
                    <form method="post" id="secondForm" enctype="multipart/form-data">
                    <table class="table table-striped" style="margin-top: 20px;">
                      <thead>
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
                  </div>

                </div><!-- End Customers Card -->

                <div class="col-12">
                  <label for="yourName" class="form-label">Supportive documents</label>
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
@endpush