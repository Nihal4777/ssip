@extends('layouts')
@section('main')


    {{-- <div class="">
        <div class="card-body">
          <h5 class="card-title"><i class="ri-filter-off-line"></i>  Search Anganwadi</h5>
    
          <!-- Browser Default Validation -->
          <form class="row g-3">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">name or center </label>
              <input type="text" class="form-control" id="validationDefault01"  required>
            </div>
            <div class="col-md-2">
              <label for="validationDefault02" class="form-label">area</label>
              <input type="text" class="form-control" id="validationDefault02" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">city</label>
              <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">City 1</option>
                <option>City 2</option>
                <option>City 2</option>
                <option>City 2</option>
                <option>City 2</option>
              </select>                 
            </div>
            <div class="col-md-2">
                <label for="validationDefault05" class="form-label">id</label>
                <input type="text" class="form-control" id="validationDefault05" required>
              </div>
          </form>
        </div>
</div> --}}
   
    <div class="addbutton card-body" style="margin: 20px auto;">
         <!-- Button trigger modal -->    
         
        <button type="submit" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#verticalycentered"> <i class="bx bxs-plus-circle"></i>  Add Anganwadi</button>
        <!-- Modal -->
        <div class="modal fade" id="verticalycentered" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add AnganWadi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" id="this" method="post">
                        {{ csrf_field() }}
                        <div class="col-12">
                          <label for="yourName" class="form-label">Center's Name</label>
                          <input type="text" name="cname" class="form-control" id="yourName" required>
                          <div class="invalid-feedback">Please, enter your name!</div>
                        </div>
    
                        <div class="col-12" style="display: inline-block;">
                          {{-- <div class="col-md-3" style="display: inline-block;" >
                            <label for="yourName" class="form-label">Center Name</label>
                            <input type="text" name="cname" class="form-control" id="yourName" required>
                            <div class="invalid-feedback">Center name!</div>
                          </div> --}}
                          <div class="col-md-3" style="display: inline-block;margin-left: 50px;">
                            <label for="yourName" class="form-label">Code</label>
                            <input type="number" name="code" class="form-control" id="yourName" required>
                            <div class="invalid-feedback">Code of Your Anganwadi!</div>
                          </div>
                        </div>
                       
    
                        <div class="col-12">
                          <label for="yourEmail" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="yourEmail" required>
                          <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Owner/managers Name</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend"> <i class="bi bi-people-fill"></i></span>
                            <input  type="text" name="uname" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="Contact" class="form-label">Phone Number</label>
                          <div class="input-group has-validation">
    
                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-telephone-fill"></i></span>
                            <input  type="tel" name="phone" class="form-control" id="phone" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                          </div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourPassword" class="form-label"> <i class="bi bi-geo-alt-fill"></i> Anganwadi's location</label>
                          
                          <textarea name="adddress" id="adddress"  rows="2" class="form-control" required></textarea>
                          <div class="invalid-feedback">Address is required!</div>
                        </div>
    
                        <div class="col-12">
                          <label for="yourName" class="form-label">City</label>
                          <input type="text" name="area" class="form-control" id="yourName" required>
                          <div class="invalid-feedback">City is required!</div>
                        </div>
                        <div class="col-12">
                          <label for="yourName" class="form-label">Pin code</label>
                          <input type="text" name="pincode" class="form-control" id="yourName" required>
                          <div class="invalid-feedback">Pin code is required!</div>
                        </div>
                        {{-- <div class="col-12">
                            <label for="yourName" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="password" required>
                            <div class="invalid-feedback">password is required!</div>
                          </div>
                          <div class="col-12">
                            <label for="yourName" class="form-label">Confirm Password</label>
                            <input type="password" name="password" class="form-control" id="cpassword" required>
                            <div class="invalid-feedback">password is required!</div>
                          </div> --}}
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" form="this">Create Now</button>
                </div>
              </div>
            </div>
          </div><!-- End Vertically centered Modal-->
        <!-- Vertically centered modal -->
    </div>
    <div class="m-3" id='alldiv' style="display: none">
      <button class="btn btn-primary ms-auto me-2" form="this" style="margin-left: auto;display: block;" data-bs-toggle="modal" data-bs-target="#grandModal" onclick="document.getElementById('flag').value=1">Grant Stocks</button>
    </div>
        <table class="table table-striped" id="myTable">
        <!-- Modal -->
        <div class="modal fade" id="modalopen" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalopenLabel">AnganWadi Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <ul class="list-group">
                      <li class="list-group-item"><i class="ri-price-tag-3-line"></i> <b> AnganWadi Id : </b></li>
                      <li class="list-group-item"><i class="ri-mail-send-fill"></i> <b> Email :</b></li>
                      <li class="list-group-item"><i class="ri-shield-user-line"></i><b> Owner's Name :</b></li>
                      <li class="list-group-item"><i class="bi bi-pin-map-fill"></i><b> City</b></li>
                      <li class="list-group-item"> <i class="bi bi-pin-angle"></i></i><b> Area :</b></li>
                      <li class="list-group-item"><i class="bi bi-house"></i><b> Location :</b></li>
                    </ul><!-- End List group With Icons -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <thead>
          <tr style="height: 50px;">
            <th scope="col"><div class="form-check">
              <input class="form-check-input checkall" type="checkbox" id="flexCheckDefault">
            </div></th>
            <th scope="col">Sr.No.</th>
            <th scope="col">Code</th>
            <th scope="col">Anganwadi Name</th>
            <th scope="col">Area</th>
            <th scope="col">City</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $i=>$d)
          <tr>
            <td><div class="form-check">
              <input class="form-check-input checkcenterids" form="grantForm" type="checkbox" name="centerids[]" value="{{$d->id}}" id="flexCheckDefault">
            </div></td>
            <th scope="row">{{$i+1}}</th>
            <td>{{$d->code}}</td>
            <td>{{$d->center_name}}</td>
            <td>{{$d->area}}</td>
            <td>{{$i+1}}</td>
            <td><a href='{{"/centers/".$d->id}}' class="btn btn-primary">Show</a></td>
            <td>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Manage
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" href="#" data-centercode="{{$d->id}}"  data-bs-toggle="modal"
                    data-bs-target="#grandModal" onclick="updateCode(event)"  >Grant Stocks</button></li>
                    <li><a class="dropdown-item" href="/centers/{{$d->id}}/stock">View Stock</a></li>
                  <li><a class="dropdown-item" href="/centers/{{$d->id}}/consumption">View Consumption History</a></li>
                </ul>
              </div>
            </td>
          </tr> 
          @endforeach
         
        </tbody>

        
      </table>
      {{-- <nav style="float: right;margin: auto 5%;" aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <span class="page-link">Previous</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">2</span>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav> --}}


      <div class="modal fade" id="grandModal" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalopenLabel">AnganWadi Name</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('grants.store')}}" method="post" id="grantForm">
                <input type="hidden" name="center_id" id="center_id" value="-1"/>
                <input type="hidden" name="check_count" id="check_count" value="0"/>
                <div class="modal-body">
                <ul class="list">
                    <li class="list-group-item" style="margin-bottom: 10px;"><i class="ri-price-tag-3-line"></i> <b> AnganWadi Id : </b></li>
                    <div class="col-6 mset">
                    <label for="validationDefault04" class="form-label">Category</label>
                    <select class="form-select cat" name="cat" id="validationDefault04" required>
                    <option selected disabled value="">Select Category</option>
                    @foreach ($cat as $c)
                      <option value='{{$c->id}}'>{{$c->name}}</option>
                    @endforeach
                    </select>                 
                </div>
                    </li>
                    <div class="col-6 mset">
                    <label for="validationDefault04" class="form-label">Item Name</label>
                    <div class='items'>
                        <select class="form-select" name="item_id" id="validationDefault04" required>
                        <option selected disabled >Item Name</option>
                        </select>      
                </div>
                    
                    </li>
        
                    <li class="list-group-item mset">Quantity : 
                    <input type="number" class="form-control" id="validationDefault01" name="qnt"  required>
                    </li>
        
                </ul><!-- End List group With Icons -->
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="flag" name="flag" value="0">Grant</button>
                </div>
                {{ @csrf_field() }}
            </form>
          </div>
        </div>
      </div>
@endsection
@push("scripts")
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">

  function updateCode(e){
    $('#center_id').val($(e.currentTarget).data('centercode'));
    $('#flag').val(0);
      }
      $(document).ready(function () {  
        let table = new DataTable('#myTable',{
          columnDefs: [
                { targets: [-1,-2], orderable: false },
          ]
        });
          $('.cat').on('change', function () {
              var selectVal = this.selectedOptions[0].value;
              var formData = {
                  "_token": "{{ csrf_token() }}",
                  'id': selectVal //for get email 
              };
              $.ajax({
                  url: `/getItem/${selectVal}`,
                  type: "get",
                  data: formData,
                  success: function(d) {
                      // $('.items').remove();    
                      $('.items').empty();
                      $('.items').append(d);
                  }
              });
              
          });
          $('.checkcenterids').on('change', function (e) {
              if(e.currentTarget.checked)
               $('#check_count').val(parseInt($('#check_count').val())+1);
              else
               $('#check_count').val(parseInt($('#check_count').val())-1);
              if(parseInt($('#check_count').val()))
              {
                $('#alldiv').show();  
                if(parseInt($('#check_count').val())==$('.checkcenterids').length)
                $('.checkall').prop('checked',e.currentTarget.checked);
              }
              else
              {
                $('#alldiv').hide();  
                $('.checkall').prop('checked',e.currentTarget.checked);
              }
          });
          $('.checkall').on('change', function (e) {
              $('#check_count').val($('.checkcenterids').length);
              $('.checkcenterids').prop('checked',e.currentTarget.checked);
              $('#alldiv').toggle();
          });



          $('body').on('change', '.state', function() {
              var selectVal = this.selectedOptions[0].value;
              var formData = {
                  "_token": "{{ csrf_token() }}",
                  'id': selectVal //for get email 
              };

              $.ajax({
                  url: "/getCity",
                  type: "post",
                  data: formData,
                  success: function(d) {
                      $('.city-list').remove();
                      $('.city-label').empty();
                      $('.city-label').append(d);
                  }
              });
              
          });
      });
  </script>
  @endpush