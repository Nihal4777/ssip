@extends('layouts')

@section('main')
<div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">Anganwadi</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                </div>
                  <div class="ps-3">
                    <h6>57</h6>
                
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>


                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Suppliers <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                   <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>₹ 31,234</h6>
                    <span class="text-success small pt-1 fw-bold">8%</span> <span
                      class="text-muted small pt-2 ps-1">increase</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>


                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Invoices <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                 <i class="bi bi-currency-dollar"></i> </div>
                  <div class="ps-3">
                    <h6>144</h6>
                   
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Reports -->
          <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Admissions In Anganwadi</h5>

                <!-- Bar Chart -->
                <div id="barChart" style="min-height: 400px;" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#barChart")).setOption({
                      xAxis: {
                        type: 'category',
                        data: ['2023', '2022', '2021', '2020', '2019', '2018', '2017']
                      },
                      yAxis: {
                        type: 'value'
                      },
                      series: [{
                        data: [120, 200, 150, 80, 70, 110, 130],
                        type: 'bar'
                      }]
                    });
                  });
                </script>
                <!-- End Bar Chart -->

              </div>
            </div>
          </div>

     
        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| This Month</span></h5>

            <div class="activity">

              <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  Generate monthly Report of your Anganwadi and submitted by tommorow
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">2 day</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  Added other Indor Games Which Improves Logical Thinking.
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">5 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                  Added Staff Details of You Angan Wadi.
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">1 week</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                  Previous Year Feedback Forms Report Generation and Submit by 14-oct
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">2 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                  Added 3 outdoors games
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">4 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                  10 <b>new student </b> Admission in your Anganwadi
                </div>
              </div><!-- End activity item-->

            </div>

          </div>
        </div><!-- End Recent Activity -->

        <!-- Budget Report
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                  legend: {
                    data: ['Allocated Budget', 'Actual Spending']
                  },
                  radar: {
                    // shape: 'circle',
                    indicator: [{
                        name: 'Sales',
                        max: 6500
                      },
                      {
                        name: 'Administration',
                        max: 16000
                      },
                      {
                        name: 'Information Technology',
                        max: 30000
                      },
                      {
                        name: 'Customer Support',
                        max: 38000
                      },
                      {
                        name: 'Development',
                        max: 52000
                      },
                      {
                        name: 'Marketing',
                        max: 25000
                      }
                    ]
                  },
                  series: [{
                    name: 'Budget vs spending',
                    type: 'radar',
                    data: [{
                        value: [4200, 3000, 20000, 35000, 50000, 18000],
                        name: 'Allocated Budget'
                      },
                      {
                        value: [5000, 14000, 28000, 26000, 42000, 21000],
                        name: 'Actual Spending'
                      }
                    ]
                  }]
                });
              });
            </script>
</div>
          </div> -->
        <!-- End Budget Report -->

        <!-- Website Traffic -->
        <div class="card">


          <div class="card-body pb-0">
            <h5 class="card-title">Overall Analysis </h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                      value: 1048,
                      name: 'Indor Games'
                    },
                    {
                      value: 735,
                      name: 'OutDor Games'
                    }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->



      </div><!-- End Right side columns -->

    </div>
  </section>    
@endsection

