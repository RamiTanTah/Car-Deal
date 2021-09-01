@extends("layouts.dashboard")
  @section('content')
 <!-- Start content -->
 <div class="content">
                <div class="container">



                    <div class="row">
                    <h3 class="text-center" >Contracts Buy Records </h3>
                        <div class="col-lg-12">
                            <div class="card-box">
                                @if(count($contract_buy) != 0)


                                            <div class="table-responsive">
                                                <table class="table table-striped " id="datatable-editable">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>clients ID</th>
                                                            <th>FirstName</th>
                                                            <th>LastName</th>
                                                            <th>Vehicle ID</th>
                                                            <th>Vehicle Brand</th>
                                                            <th>Price</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                        
                                                            <td>11</td>
                                                            <td>mohamad</td>
                                                            <td>haikal</td>
                                                            <td>55 </td>
                                                            <td>rio</td>
                                                            <td>1000$</td>
                                                            <td>1/1/2021 - 10:25:33 am</td>
                                                        

                                                        
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">1</th>
                                                        <td>11</td>
                                                            <td>mohamad</td>
                                                            <td>haikal</td>
                                                            <td>55 </td>
                                                            <td>rio</td>
                                                            <td>1000$</td>
                                                            <td>1/1/2021 - 10:25:33 am</td>

                                                    
                                                        </tr>
                                                        <tr>
                                                        <th scope="row">1</th>
                                                        <td>11</td>
                                                            <td>mohamad</td>
                                                            <td>haikal</td>
                                                            <td>55 </td>
                                                            <td>rio</td>
                                                            <td>1000$</td>
                                                            <td>1/1/2021 - 10:25:33 am</td>
                                                        

                                                        

                                                        </tr>
                                                

                                                        

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div><!-- end col -->

                                @else
                                    <div class="text-center , alert alert-danger">
                                        <h3> No Data</h3> 
                                    </div>
                                @endif

                    </div>
                    <!-- end row -->
                    



                    <!-- ============================================================== -->
                    <!-- End Right content here -->
                    <!-- ============================================================== -->


                    <!-- Right Sidebar -->
                    <div class="side-bar right-bar">
                        <a href="javascript:void(0);" class="right-bar-toggle">
                            <i class="zmdi zmdi-close-circle-o"></i>
                        </a>
                        <h4 class="">T`H`E`M`E`L`O`C`K`.`C`O`M`</h4>
                        <div class="notification-list nicescroll">
                            <ul class="list-group list-no-border user-list">
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Michael Zenaty</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="zmdi zmdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-pink">
                                            <i class="zmdi zmdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item active">
                                    <a href="#" class="user-list-item">
                                        <div class="avatar">
                                            <img src="assets/images/users/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">James Anderson</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item active">
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-warning">
                                            <i class="zmdi zmdi-settings"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Settings</span>
                                            <span class="desc">There are new settings available</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /Right-bar -->
                    @endsection