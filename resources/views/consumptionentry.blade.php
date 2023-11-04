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

<div class="pagetitle">
    <h1>Consumption</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">
          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Consumption Entry</h5>
                <p class="text-center small">Enter Anganwadi consumption details</p>
              </div>

              <form class="row g-3 needs-validation" novalidate >
                <div class="col-12">
                  <label for="yourName" class="form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                  <div class="invalid-feedback">Please, select Date!</div>
                </div>

                <div class="col-12">
                  <label for="yourName" class="form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                  <div class="invalid-feedback">Please, select Date!</div>
                </div>

                <div class="col-lg-8">
                  <!-- Customers Card -->
                  <div class="col-xxl col-xl">
                    <div class="card info-card customers-card card-center">
                      <div class="card-body text-align: center" style="padding-top: 10px;">
                        <div class="form-group">
                          <label for="item">Category</label>
                          <select class="form-select" id="cat" required>
                            <option selected disabled value="cat">Select Category</option>
                            <option> Food and Nutritional Products</option>
                            <option> Hygiene and Healthcare</option>
                            <option> Clothing and Apparel</option>
                            <option> Educational and Training Materials</option>
                            <option> Furniture and Equipment</option>
                            <option> Transportation and Vehicles</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="item">Item</label>
                          <select class="form-select" id="item" required>
                            <option selected disabled>Item 1</option>
                            <option>Item 2</option>
                            <option>Item 2</option>
                            <option>Item 2</option>
                            <option>Item 2</option>
                          </select>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                          <label for="quantity">Quantity</label>
                          <input type="number" class="form-control" id="quantity" placeholder="Enter quantity">
                        </div>
                        <div class="btn-group d-flex justify-content-start" style="padding-top: 20px;">
                          <button type="button" class="btn btn-primary" id="add-button">Add</button>
                          <button type="button" class="btn btn-danger" id="remove-button">Remove</button>
                        </div>

                      </div>

                    </div>
                    <table class="table table-striped" style="margin-top: 20px;">
                      <thead>
                        <tr>
                          <th>Category</th>
                          <th>Item</th>
                          <th>Quantity</th>
                        </tr>
                      </thead>
                      <tbody id="item-list"></tbody>
                    </table>
                  </div>

                </div><!-- End Customers Card -->

                <div class="col-12">
                  <label for="yourName" class="form-label">Proof of Work</label>
                  <div class="col-sm-10">
                    <input type="file" multiple id="images" name="images[]" accept="image/*">
                  </div>
                  <div class="invalid-feedback">Please, select Date!</div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Submit</button>
                </div>
              </form>

            </div>
          </div>

          <!-- Website Traffic -->
          <div class="card">

          </div>
        </div><!-- End Website Traffic -->



      </div><!-- End Right side columns -->

    </div>
  </section>