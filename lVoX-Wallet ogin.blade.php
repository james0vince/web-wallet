@guest
        <div class="d-md-flex flex-row-reverse">
          <div class="signin-right">

            <div class="signin-box">
              <h2 class="signin-title-primary">Welcome back!</h2>
              <h3 class="signin-title-secondary">Sign in to continue.</h3>
              <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" name="login" id="login">
                  @csrf
                  <div class="form-group">
                    <input class="form-control" placeholder="Enter your email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div><!-- form-group -->
                  <div class="form-group mg-b-50">
                    <input class="form-control" placeholder="Please enter your password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  </div><!-- form-group -->
                  <a href="http://dasboard.variusworldtech.com/user/index.html"><button class="btn btn-primary btn-block btn-signin">Sign In</button></a>
                  <p class="mg-b-0">Don't have an account? <a href="#" onclick="document.getElementById('login').submit();">Sign Up</a></p>
               </form>
            </div>

          </div><!-- signin-right -->
          <div class="signin-left">
            <div class="signin-box">
              <h2 class="slim-logo"><a href="index.html">Varius World Tech</a></h2>

              <p>Varius World Technology are excited to launch our new ICO raising funds to developer our inductsty specific Distributed Ledger Technology protocol. </p>

              <p>Browse our site and see for yourself why you should invest in VWT!</p>

              <p><a href="http://vwt.bet" class="btn btn-outline-secondary pd-x-25">Learn More</a></p>

              <p class="tx-12">&copy; Copyright 2018. All Rights Reserved.</p>
            </div>
          </div><!-- signin-left -->
        </div><!-- d-flex -->
    @else
     <div class="container">
        <div class="slim-mainpanel">
          <div class="container">
            <div class="slim-pageheader">
              <ol class="breadcrumb slim-breadcrumb">
             
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
              <h6 class="slim-pagetitle">Dashboard</h6>
            </div><!-- slim-pageheader -->

            <div class="dash-headline">
              <div class="dash-headline-left">
                <div class="dash-headline-item-one">
                  <div id="chartArea1" class="dash-chartist"></div>
                  <div class="dash-item-overlay">
                    <h1>325,000 <span class="tx-24">VoX</span></h1>
                    <p class="earning-label">Tokens purchased</p>
                    <p class="earning-desc">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
                    <a href="index.html#" class="statement-link">View Statements <i class="fa fa-angle-right mg-l-5"></i></a>
                  </div>
                </div><!-- dash-headline-item-one -->
              </div><!-- dash-headline-left -->

              <div class="dash-headline-right">
                <div class="dash-headline-right-top">
                  <div class="dash-headline-item-two">
                    <div id="chartMultiBar1" class="chart-rickshaw"></div>
                    <div class="dash-item-overlay">
                      <h4>&dollar;100,000<span class="tx-20"> USD</span></h4>
                      <p class="item-label">Current Value</p>
                      <p class="item-desc">You bought during the first trance at 20c USD...</p>
                      <a href="index.html#" class="report-link">View Chart <i class="fa fa-angle-right mg-l-5"></i></a>
                    </div>
                  </div><!-- dash-headline-item-two -->
                </div><!-- dash-headline-right-top -->
                <div class="dash-headline-right-bottom">
                  <div class="dash-headline-right-bottom-left">
                    <div class="dash-headline-item-three">
                      <div>
                        <h1>$15/$25 M</h1>
                        <p class="item-label">Left for the soft cap!</p>
                        <!-- <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p> -->
                      </div>
                    </div><!-- dash-headline-item-three -->
                  </div><!-- dash-headline-right-bottom-left -->
                  <!-- <div class="dash-headline-right-bottom-right">
                    <div class="dash-headline-item-three">
                      <div>
                        <h1>45,231</h1>
                        <p class="item-label">Female Visitors</p>
                        <p class="item-desc">Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
                      </div>
                    </div><!-- dash-headline-item-three -->
                  <!-- </div>dash-headline-right-bottom-right -->
                </div><!-- dash-headline-right-bottom -->
              </div><!-- wd-50p -->
            </div><!-- d-flex ht-100v -->

            <div class="card card-dash-one mg-t-20">
              <div class="row no-gutters">
                <div class="col-lg-3">
                  <i class="icon ion-ios-analytics-outline"></i>
                  <div class="dash-content">
                    <label class="tx-primary">Tokens Owned</label>
                    <h2>325,000</h2>
                  </div><!-- dash-content -->
                </div><!-- col-3 -->
                <div class="col-lg-3">
                  <i class="icon ion-ios-pie-outline"></i>
                  <div class="dash-content">
                    <label class="tx-success">Percentage</label>
                    <h2>9% owned</h2>
                  </div><!-- dash-content -->
                </div><!-- col-3 -->
                <div class="col-lg-3">
                  <i class="icon ion-ios-stopwatch-outline"></i>
                  <div class="dash-content">
                    <label class="tx-purple">Remaining</label>
                    <h2>364 days</h2>
                  </div><!-- dash-content -->
                </div><!-- col-3 -->
                <div class="col-lg-3">
                  <i class="icon ion-ios-world-outline"></i>
                  <div class="dash-content">
                    <label class="tx-danger">Gain</label>
                    <h2>$1,873</h2>
                  </div><!-- dash-content -->
                </div><!-- col-3 -->
              </div><!-- row -->
            </div><!-- card -->

            <div class="row row-sm mg-t-20">
              <div class="col-lg-6">
                <div class="card card-table">
                  <div class="card-header">
                    <h6 class="slim-card-title">Token Transactions</h6>
                  </div><!-- card-header -->
                  <div class="table-responsive">
                    <table class="table mg-b-0 tx-13">
                      <thead>
                        <tr class="tx-10">
                          <th class="wd-10p pd-y-5">&nbsp;</th>
                          <th class="pd-y-5">Item Details</th>
                          <th class="pd-y-5 tx-right">Sold</th>
                          <th class="pd-y-5">Gain</th>
                          <th class="pd-y-5 tx-center">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img28.jpg" class="wd-55" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                          </td>
                          <td class="valign-middle tx-right">3,345</td>
                          <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                          <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img29.jpg" class="wd-55" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                          </td>
                          <td class="valign-middle tx-right">720</td>
                          <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                          <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img30.jpg" class="wd-55" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                          </td>
                          <td class="valign-middle tx-right">1,445</td>
                          <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                          <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img31.jpg" class="wd-55" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                          </td>
                          <td class="valign-middle tx-right">2,500</td>
                          <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                          <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img32.jpg" class="wd-55" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                          </td>
                          <td class="valign-middle tx-14 tx-right">223</td>
                          <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                          <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                  <div class="card-footer tx-12 pd-y-15 bg-transparent">
                    <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transactions</a>
                  </div><!-- card-footer -->
                </div><!-- card -->
              </div><!-- col-6 -->
              <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                <div class="card card-table">
                  <div class="card-header">
                    <h6 class="slim-card-title">User Transaction History</h6>
                  </div><!-- card-header -->
                  <div class="table-responsive">
                    <table class="table mg-b-0 tx-13">
                      <thead>
                        <tr class="tx-10">
                          <th class="wd-10p pd-y-5">&nbsp;</th>
                          <th class="pd-y-5">User</th>
                          <th class="pd-y-5">Type</th>
                          <th class="pd-y-5">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img1.jpg" class="wd-36 rounded-circle" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                            <span class="tx-11 d-block">TRANSID: 1234567890</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                          </td>
                          <td>Just Now</td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img2.jpg" class="wd-36 rounded-circle" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                            <span class="tx-11 d-block">TRANSID: 1234567890</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                          </td>
                          <td>Apr 21, 2017 8:34am</td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img3.jpg" class="wd-36 rounded-circle" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                            <span class="tx-11 d-block">TRANSID: 1234567890</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                          </td>
                          <td>Apr 10, 2017 4:40pm</td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img5.jpg" class="wd-36 rounded-circle" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                            <span class="tx-11 d-block">TRANSID: 1234567890</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                          </td>
                          <td>Apr 02, 2017 6:45pm</td>
                        </tr>
                        <tr>
                          <td class="pd-l-20">
                            <img src="../img/img4.jpg" class="wd-36 rounded-circle" alt="Image">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                            <span class="tx-11 d-block">TRANSID: 1234567890</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                          </td>
                          <td>Mar 30, 2017 10:30am</td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- table-responsive -->
                  <div class="card-footer tx-12 pd-y-15 bg-transparent">
                    <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
                  </div><!-- card-footer -->
                </div><!-- card -->
              </div><!-- col-6 -->
            </div><!-- row -->

            <div class="row row-sm mg-t-20">
              <div class="col-lg-4">
                <div class="card card-info">
                  <div class="card-body pd-40">
                    <div class="d-flex justify-content-center mg-b-30">
                      <img src="../img/icon1.svg" class="wd-100" alt="">
                    </div>
                    <h5 class="tx-inverse mg-b-20">Safe &amp; Secure</h5>
                    <p>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>
                    </p>
                  </div><!-- card -->
                </div><!-- card -->
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="card card-info">
                  <div class="card-body pd-40">
                    <div class="d-flex justify-content-center mg-b-30">
                      <img src="../img/icon2.svg" class="wd-100" alt="">
                    </div>
                    <h5 class="tx-inverse mg-b-20">Instant Exchange</h5>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                    <a href="" class="btn btn-primary btn-block">Take a Tour</a>
                  </div><!-- card-body -->
                </div><!-- card -->
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="card card-sales">
                  <h6 class="slim-card-title tx-primary">Sales Report</h6>
                  <div class="row">
                    <div class="col">
                      <label class="tx-12">Today</label>
                      <p>1,898</p>
                    </div><!-- col -->
                    <div class="col">
                      <label class="tx-12">This Week</label>
                      <p>32,112</p>
                    </div><!-- col -->
                    <div class="col">
                      <label class="tx-12">This Month</label>
                      <p>72,067</p>
                    </div><!-- col -->
                  </div><!-- row -->

                  <div class="progress mg-b-5">
                    <div class="progress-bar bg-primary wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
                  <p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
                </div><!-- card -->

                <div class="card card-impression mg-t-20">
                  <div class="card-body pd-b-0">
                    <h6 class="slim-card-title tx-primary">Page Impressions</h6>
                    <h2 class="tx-lato tx-inverse">323,360</h2>
                    <p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
                  </div><!-- card-body -->
                  <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
                </div><!-- card -->
              </div><!-- col-4 -->
            </div><!-- row -->

          </div><!-- container -->
        </div><!-- slim-mainpanel -->

        <div class="slim-footer">
          <div class="container">
            <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
            <p>Designed by: <a href="">ThemePixels</a></p>
          </div><!-- container -->
        </div><!-- slim-footer -->
     </div>
</div>       
    @endguest

