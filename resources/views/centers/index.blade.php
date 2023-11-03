@extends('layouts')
@section('main')
<main id="main" class="main">
    <div class="">
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
</div>
   
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

        <table class="table table-striped">
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
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Anganwadi Name</th>
            <th scope="col">Code</th>
            <th scope="col">Area</th>
            <th scope="col">City</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>23123</td>
            <td>Brandon Jacob</td>
            <td>28</td>
            <td>Kessler</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>23146</td>
            <td>Bridie Kessler</td>
            <td>35</td>
            <td>Jacob</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>823456</td>
            <td>Ashleigh Langosh</td>
            <td>45</td>
            <td>Bridie</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>23479</td>
            <td>Angus Grady</td>
            <td>34</td>
            <td>Bridie</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen" >open</button></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>24621</td>
            <td>Raheem Lehner</td>
            <td>47</td>
            <td>Raheem</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>23123</td>
            <td>Brandon Jacob</td>
            <td>28</td>
            <td>Kessler</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>23146</td>
            <td>Bridie Kessler</td>
            <td>35</td>
            <td>Jacob</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>823456</td>
            <td>Ashleigh Langosh</td>
            <td>45</td>
            <td>Bridie</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>23479</td>
            <td>Angus Grady</td>
            <td>34</td>
            <td>Bridie</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen" >open</button></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>24621</td>
            <td>Raheem Lehner</td>
            <td>47</td>
            <td>Raheem</td>
            <td>Ahmedabad</td>
            <td><button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalopen">open</button></td>
          </tr>
        </tbody>
      </table>
      <nav style="float: right;margin: auto 5%;" aria-label="...">
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
      </nav>
  </main>
@endsection