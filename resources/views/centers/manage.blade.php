@extends('layouts')
@section('main')
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Arvalli Anganwadi</h5>
        <ul class="custom" style="margin: 10px auto;">
          <li class="list-group-item"><i class="ri-price-tag-3-line"></i> <b> AnganWadi Id : </b> {{$user->email}}</li>
          <li class="list-group-item"><i class="ri-mail-send-fill"></i> <b> Email :</b> {{$user->email}}</li>
          <li class="list-group-item"><i class="ri-shield-user-line"></i><b> Owner's Name :</b> {{$user->name}}</li>
          <li class="list-group-item"><i class="bi bi-pin-map-fill"></i><b> City</b> Arvalli</li>
          <li class="list-group-item"><i class="bi bi-pin-angle"></i></i><b> Area :</b> {{$center->area}} </li>
          <li class="list-group-item"><i class="bi bi-house"></i><b> Location :</b> {{$center->address}}

            <span style="margin: auto 5%;">
              {{-- <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#verticalycentetomato"> <i class="bi bi-clock-history"></i> History</button></span> --}}
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
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($Pstocks as $stocks)
          <tr>
            <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
            <th scope="row">1</th>
            <td>{{$stocks->item_cat}}</td>
            <td>{{$stocks->item_name}}</td>
            <td>{{$stocks->qnt}}</td>
            <td>{{$stocks->created_at}}</td>
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
      <h5 class="card-title"> <i class="bi bi-cart-check-fill"></i> Assigned Stock</h5>
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
      <h5 class="card-title"> <i class="bi bi-calculator"></i>Invoices</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead class="table-success">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Anganwadi Name</th>
            <th scope="col">Category</th>
            <th scope="col">Amount</th>
            <th>Date</th>
            <th scope="col" colspan="3"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Pstocks as $stocks)
            <tr>
              <th><i class="bi bi-cup-straw" style="color: tomato;"></i></th>
              <th scope="row">1</th>
              <td>{{$stocks->item_cat}}</td>
              <td>{{$stocks->item_name}}</td>
              <td>{{$stocks->qnt}}</td>
              <td>{{$stocks->created_at}}</td>
              <td>Pending</td>
            </tr>
            @endforeach

        </tbody>
      </table>


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
            <form action="{{route('stocks.store')}}" method="post">
                <input type="hidden" name="center_code" value="{{$center->id}}"/>
                <div class="modal-body">
                <ul class="list">
                    <li class="list-group-item" style="margin-bottom: 10px;"><i class="ri-price-tag-3-line"></i> <b> AnganWadi Id : </b></li>
                    <div class="col-6 mset">
                    <label for="validationDefault04" class="form-label">Category</label>
                    <select class="form-select cat" name="cat" id="validationDefault04" required>
                    <option selected disabled value="">Select Category</option>
                    @foreach ($cat as $c)
                        <option>{{$c->type}}</option>
                    @endforeach
                    </select>                 
                </div>
                    </li>
                    <div class="col-6 mset">
                    <label for="validationDefault04" class="form-label">Item Name</label>
                    <div class='items'>
                        <select class="form-select" name="item_name" id="validationDefault04" required>
                        <option selected disabled value="">Item Name</option>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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