@extends('layouts')
@section('main')
<style>
  .custom-responsive
  {
    letter-spacing:1px;
  }
  hr
  {
    width:50%;
    opacity: 0.1;
  }
  .custom li button{
    margin:5px 10px;
  }
  .custom li button:hover{
      
    filter: grayscale(0.2); 
    transition:0.3s all;
  }
        </style>
    <div class="card custom-responsive">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Arvalli Anganwadi</h5>
        <ul class="custom" style="margin: 10px auto;">
          <li class="list-group-item"><i class="ri-price-tag-3-line"></i> <b> AnganWadi Code : </b> {{$center->code}}</li>
          <li class="list-group-item"><i class="ri-shield-user-line"></i><b> Owner's Name :</b> {{$user->name}}</li>
          <li class="list-group-item"><i class="ri-mail-send-fill"></i> <b> Email :</b> {{$user->email}}</li>
          <li class="list-group-item"><i class="bi bi-pin-angle"></i></i><b> Area :</b> {{$center->area}} </li>
          <li class="list-group-item"><i class="bi bi-pin-map-fill"></i><b> City</b> Arvalli</li>
          <li class="list-group-item"><i class="bi bi-house"></i><b> Location :</b> {{$center->address}}

            <hr>
            <span style="margin: auto 5%;">
              {{-- <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#verticalycentetomato"> <i class="bi bi-clock-history"></i> History</button></span> --}}
            <button type="submit" class="btn btn-primary" style="font-size:20px;" data-bs-toggle="modal"
                data-bs-target="#verticalycentetomato"> <i class="ri ri-mail-send-fill"></i> </button>
              <button type="submit" class="btn " style="background-color: rgb(35, 187, 35);color:white;font-size:20px;" data-bs-toggle="modal"
                data-bs-target="#verticalycentetomato"> <i class="ri ri-whatsapp-fill"></i> </button></span> 
          </li>
        </ul><!-- End List group With Icons -->
      </div>
    </div>

    <!-- Stocks ================ -->
    <div class="card-body">
      <h5 class="card-title"><i class="ri-archive-fill"></i> Current Stock</h5>

      <!-- Table with hoverable rows -->
      
      <table class="table table-hover">
        <thead class="table-success">
          <tr>
            <th></th>
            <th scope="col">No</th>
            <th scope="col">Category</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Last updated</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($stocks as $i=>$stock)
          <tr>
            <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
            <th scope="row">{{$i+1}}</th>
            <td>{{$stock->cname}}</td>
            <td>{{$stock->itemName}}</td>
            <td>{{$stock->qnt}}</td>
            <td>{{$stock->updated_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


    <nav style="float: right;margin: auto 5%;" aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item " aria-current="page">
          <span class="page-link">2</span>
        </li>

        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!-- End Table with hoverable rows -->
    <div class="card-body">
      <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Invoices</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead class="table-success">
          <tr>
            <th></th>
            <th scope="col">No</th>
            <th scope="col">Category</th>
            <th scope="col">Item</th>
            <th scope="col">Quantity</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
            <th scope="row">1</th>
            <td>Food</td>
            <td>Brandon Jacob</td>
            <td>28</td>
            <td>2016-05-25</td>
            <td>pending</td>  
            <td>
              <button type="submit" class="btn btn-primary" > Cancel </button>
            </td>
          </tr>
          
        </tbody>
      </table>

      
      <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#grandModal"> Grant </button></td>

    </div>

    <!--Invoice---------  -->
    <div class="card-body">
      <h5 class="card-title"> <i class="bi bi-calculator"></i>Assigned Stocks</h5>
      <div class="table-responsive">
      <!-- Table with hoverable rows -->
        <table class="table table-hover">
          <thead class="table-success">
            <tr>
              <th><i class="bi bi-three-dots-vertical"></i></th>
              <th scope="col">Grant Id.</th>
              <th scope="col">Category</th>
              <th scope="col">Item</th>
              <th scope="col">Quantity</th>
              <th scope="col">Fulfilled</th>
              <th scope="col">Date</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($grants as $g)
              <tr>
                <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
                <th scope="row">{{$g->id}}</th>
                <td>{{$g->cname}}</td>
                <td>{{$g->itemName}}</td>
                <td>{{$g->qnt}}</td>
                <td>{{$g->fulfilled}}</td>
                <td>{{$g->created_at}}</td>
                <td>Pending</td>
              </tr>
              @endforeach

          </tbody>
        </table>
      </div>

    </div>

      <!-- Table with hoverable rows -->
      {{-- <table class="table table-hover">
        <thead class="table-success">
          <tr>

            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Area</th>
            <th scope="col">status</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <th scope="row">1</th>
            <td>45786</td>
            <td>Brandon </td>
            <td><i class="bi bi-clock-history" style="color: tomato;"></i> pending</td>
            <td>2016-05-25</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>

            <th scope="row">1</th>
            <td>45786</td>
            <td>Brandon </td>
            <td><i class="bi bi-clock-history" style="color: tomato;"></i> pending</td>
            <td>2016-05-25</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#modalopen">open</button></td>
          </tr>

        </tbody>
      </table> --}}
    </div>
    <div class="modal fade" id="grandModal" tabindex="-1" aria-labelledby="modalopenLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalopenLabel">AnganWadi Name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{route('grants.store')}}" method="post">
              <input type="hidden" name="center_id" value="{{$center->id}}"/>
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
              <button type="submit" class="btn btn-primary">Grant</button>
              </div>
              {{ @csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  @endsection

  @push("scripts")
  <script type="text/javascript">
      $(document).ready(function () {   
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