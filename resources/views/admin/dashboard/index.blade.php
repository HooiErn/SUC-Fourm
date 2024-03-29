<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 <!--Main-->

 <head>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="assets/js/shared/jquery.cookie.js" type="text/javascript"></script>
     
  </head>
  <body>
    <div class="container-scroller" style="padding:1.5rem !important">

              <div class="col-md-12">
                <div class="page-header-toolbar">
                  <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                    <table>
                  <td>Date:</td>
                    <td><div style="width:120px" class="input-group date">
                        <input type="date" class="form-control pull-right" id="datepicker"/>
                      </div> </td>
                      <td>&nbsp To:</td>
                      <td><div style="width:120px" class="input-group date">
                        <input type="date" class="form-control pull-right" id="datepicker"/>
                      </div></td>
                  </div>
                  </table>
                </div>
              </div>
            </div>
            <br>
            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">451</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Users</h5>
                            <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-1" ></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">236</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Posts</h5>
                            <p class="mb-0 text-muted">+38.97(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-2"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">10</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Category</h5>
                            <p class="mb-0 text-muted">+57.62(+0.76%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-3"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold">53</h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Tags</h5>
                            <p class="mb-0 text-muted">+138.97(+0.54%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                            <canvas height="50" width="100" id="stats-line-graph-4"></canvas>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Forum Statistics Overview</h4>
                    <div class="d-flex flex-column flex-lg-row">
                      <p>Lorem ipsum is placeholder text commonly used</p>
                      <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                        </li>
                      </ul>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                      <div class="data-wrapper d-flex mt-2 mt-lg-0">
                        <div class="wrapper pr-5">
                          <h5 class="mb-0">Total Users</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">5,263</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>82.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                        <div class="wrapper">
                          <h5 class="mb-0">Total Posts</h5>
                          <div class="d-flex align-items-center">
                            <h4 class="font-weight-semibold mb-0">598</h4>
                            <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                          </div>
                        </div>
                      </div>
                      <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body d-flex flex-column">
                    <div class="wrapper">
                      <h4 class="card-title mb-0">Feedback</h4>
                      <p>Started collecting data from February 2019</p>
                      <div class="mb-4" id="net-profit-legend"></div>
                    </div>
                    <canvas class="my-auto mx-auto" height="250" id="net-profit"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Total Feedback</h4>
                          <p class="font-weight-semibold mb-0">+1.37%</p>
                        </div>
                        <h3 class="font-weight-medium mb-4">4.42K</h3>
                      </div>
                  
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body pb-0">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">New Tags</h4>
                          <p class="font-weight-semibold mb-0">-2.87%</p>
                        </div>
                        <h3 class="font-weight-medium">3.7K</h3>
                      </div>
                     
                    </div>
                  </div>
                 
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Users</h4>
                          <a href="#"><small>Show All</small></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est quod cupiditate esse fuga</p>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>User ID</th>
                                <th>User</th>
                                <th>Status</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>A-87239</td>
                                <td>Viola Ford</td>
                                <td>Active</td>
                                <td>20 Jan 2020</td>
                              </tr>
                              <tr>
                                <td>A-87239</td>
                                <td>Dylan Waters</td>
                                <td>Active</td>
                                <td>23 Feb 2020</td>
                              </tr>
                              <tr>
                                <td>B-87239</td>
                                <td>Louis Poole</td>
                                <td>Active</td>
                                <td>25 Mar 2020</td>
                              </tr>
                              <tr>
                                <td>V-87239</td>
                                <td>Vera Howell</td>
                                <td>Inactive</td>
                                <td>27 Mar 2020</td>
                              </tr>
                              <tr>
                                <td>V-87239</td>
                                <td>Allie Goodman</td>
                                <td>Inactive</td>
                                <td>1 Apr 2020</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-danger mr-2"></div>
                              <p class="mb-0">Inactive Users</p>
                            </div>
                            <h4 class="font-weight-semibold">590</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                          </div>
                          <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                              <div class="dot-indicator bg-success mr-2"></div>
                              <p class="mb-0">Active Users</p>
                            </div>
                            <h4 class="font-weight-semibold">460</h4>
                            <div class="progress progress-md">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 grid-margin stretch-card average-price-card">
                    <div class="card text-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between pb-2 align-items-center">
                          <h2 class="font-weight-semibold mb-0">4,624</h2>
                          <div class="icon-holder">
                            <i class="mdi mdi-briefcase-outline"></i>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between">
                          <h5 class="font-weight-semibold mb-0">Average Posts</h5>
                          <p class="text-white mb-0">Since last month</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h1 class="card-title mb-4">Website Audience Metrics</h1>
                        <div class="row">
                          <div class="col-5 col-md-5">
                            <div class="border-bottom mb-2 pb-2">
                              <h4 class="font-weight-semibold mb-0">2,200</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Page Views</p>
                                <div class="dot-indicator bg-secondary ml-auto"></div>
                              </div>
                            </div>
                            <div >
                              <h4 class="font-weight-semibold mb-0">198</h4>
                              <div class="d-flex align-items-center">
                                <p class="mb-0">Bounce Rate</p>
                                <div class="dot-indicator bg-primary ml-auto"></div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <div class="row mt-5">
                          <div class="col-6">
                            <div class="d-flex align-items-center mb-2">
                              <div class="icon-holder bg-primary text-white py-1 px-3 rounded mr-2">
                                <i class="icon ion-logo-buffer icon-sm"></i>
                              </div>
                              <h2 class="font-weight-semibold mb-0">1,605</h2>
                            </div>
                            <p>Since last week</p>
                            <p><span class="font-weight-medium">0.51%</span> (30 days)</p>
                          </div>
                          <div class="col-6">
                            <div class="mt-n3 ml-auto" id="dashboard-guage-chart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title mb-0">Top Performer</h4>
                        <div class="d-flex mt-3 py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="assets/images/faces/face3.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Lim Hui Yue</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">1 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <span class="img-sm rounded-circle bg-warning text-white text-avatar">ST</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Stella Law</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex py-2 border-bottom">
                          <img class="img-sm rounded-circle" src="assets/images/faces/face4.jpg" alt="profile image">
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Tan Jia Jie</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">4 Hours ago</small>
                        </div>
                        <div class="d-flex pt-2">
                          <span class="img-sm rounded-circle bg-success text-white text-avatar">WS</span>
                          <div class="wrapper ml-2">
                            <p class="mb-n1 font-weight-semibold">Ong Wen Song</p>
                            <small>162543</small>
                          </div>
                          <small class="text-muted ml-auto">7 Hours ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">Recent Events</h4>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                      </div>
                      <small class="text-muted ml-auto">Edit event</small>
                    </div>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Other Events</p>
                      </div>
                      <small class="text-muted ml-auto">Edit event</small>
                    </div>
                    <div class="d-flex py-2 border-bottom">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Quarterly Report</p>
                      </div>
                      <small class="text-muted ml-auto">Edit event</small>
                    </div>
                    <div class="d-flex pt-2">
                      <div class="wrapper">
                        <small class="text-muted">Mar 14, 2019</small>
                        <p class="font-weight-semibold text-gray mb-0">Change in Directors</p>
                      </div>
                      <small class="text-muted ml-auto">Edit event</small>
                    </div>
                    <a class="d-block mt-5" href="#">Show all</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between pb-3">
                      <h4 class="card-title mb-0">Activities</h4>
                      <p class="mb-0 text-muted">20 finished, 5 remaining</p>
                    </div>
                    <ul class="timeline">
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Lim Hooi Ern</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Lai Jin Fatt</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Lee Jia Xuan</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Lai Jin Fatt</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                      <li class="timeline-item">
                        <p class="timeline-content"><a href="#">Lim Hooi Ern</a> assign you a task</p>
                        <p class="event-time">Just now</p>
                      </li>
                    </ul>
                    <a class="d-block mt-3" href="#">Show all</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-0">People Also Watch</h4>
                    <div class="table-responsive">
                      <table class="table table-stretched">
                        <thead>
                          <tr>
                            <th>Post</th>
                            <th>Category</th>
                            <th>Tags</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">MalaysiaBoleh</p><small class="font-weight-medium">MrNews</small>
                            </td>
                            <td class="font-weight-medium">News</td>
                            <td class="text-success font-weight-medium">#MalaysiaBoleh</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">TOP 10 things you need to know on SUC</p><small class="font-weight-medium">Lily</small>
                            </td>
                            <td class="font-weight-medium">College</td>
                            <td class="text-success font-weight-medium">#dailylife</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Recipe of cooking</p><small class="font-weight-medium">Jia Wen</small>
                            </td>
                            <td class="font-weight-medium">Recipe</td>
                            <td class="text-success font-weight-medium">#delicious</td>
                          </tr>
                          <tr>
                            <td>
                              <p class="mb-1 text-dark font-weight-medium">Ghost Story on SUC</p><small class="font-weight-medium">Sze Qiong</small>
                            </td>
                            <td class="font-weight-medium">Story</td>
                            <td class="text-success font-weight-medium">#ghost</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a class="d-block mt-3" href="#">Show all</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
       
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

  </body>
   


    
 
</x-app-layout>
