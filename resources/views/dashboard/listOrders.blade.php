@extends('dashboard.layouts')
@section('dashboard')

<div class="header">
    <div class="pull-left">
        <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Webstrot Admin</span></a></div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
            <li class="header-icon dib"><i class="ti-bell"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Recent Notifications</span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">5 members joined today </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">likes a photo of you</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><i class="ti-email"></i>
                <div class="drop-down">
                    <div class="dropdown-content-heading">
                        <span class="text-left">2 New Messages</span>
                        <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-unread">
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                    <div class="notification-content">
                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                        <div class="notification-heading">Mr. Ajay</div>
                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                    </div>
                                </a>
                            </li>
                            <li class="text-center">
                                <a href="#" class="more-link">See All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar"> Ajay <i class="ti-angle-down f-s-10"></i></span>
                <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                        <span class="text-left">Upgrade Now</span>
                        <p class="trial-day">30 Days Trail</p>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                            <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                            <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                            <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                            <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                            <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                            <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                            <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                            <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->

            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card alert">
                            <div class="product-2-details">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-2-img">
                                                    <img src="assets/images/product_1/download.jpg" alt="" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-des">
                                                    <div class="product_name">
                                                        <h4>Maxican Hot Pizza</h4>
                                                    </div>
                                                    <div class="product_des">
                                                        <p>Vimply dummy text the printing and type setting indust.</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-2-button">
                                                    <div class="prdt_add_to_cart">
                                                        <button type="button" class="btn btn-danger btn-lg btn-rounded m-b-10 m-l-5">$29</button>
                                                        <button type="button" class="btn btn-primary btn-lg btn-rounded m-b-10 m-l-5">add to cart</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
            </div>
            <!-- /# main content -->





        </div>
        <!-- /# container-fluid -->
    </div>
    <!-- /# main -->
</div>
<!-- /# content wrap -->

<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection