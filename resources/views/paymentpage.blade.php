<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>RHC EMR | Payment Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<style>
    .profile-header {
        color: #fff;
        padding: 40px 0;
        text-align: center;
    }

    .profile-avatar {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }
</style>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            @include('components.sidenav')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="white" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z" />
                                </svg></button>
                            <div class="logo_section">
                                <a href="index.php"><img class=""
                                        src="https://www.rccghealthcentre.com/assets/images/rccg-logo-121x121.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M21 19v1H3v-1l2-2v-6c0-3.1 2.03-5.83 5-6.71V4a2 2 0 0 1 2-2a2 2 0 0 1 2 2v.29c2.97.88 5 3.61 5 6.71v6zm-7 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2" />
                                                </svg><span class="badge">.</span></a></li>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10 19h3v3h-3zm2-17c5.35.22 7.68 5.62 4.5 9.67c-.83 1-2.17 1.66-2.83 2.5C13 15 13 16 13 17h-3c0-1.67 0-3.08.67-4.08c.66-1 2-1.59 2.83-2.25C15.92 8.43 15.32 5.26 12 5a3 3 0 0 0-3 3H6a6 6 0 0 1 6-6" />
                                                </svg></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li> -->
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                    src="https://www.rccghealthcentre.com/assets/images/rccg-logo-121x121.png"
                                                    alt="#" /><span
                                                    class="name_user">{{ Auth::user()->full_name }} <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="white"
                                                            d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175" />
                                                    </svg> </span></a>
                                            <div class="dropdown-menu">
                                                <!--   <a class="dropdown-item" href="profile.php">My Profile</a>
                                                <a class="dropdown-item" href="help.php">Help</a> -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Hii {{ Auth::user()->full_name }}! Kindly make your Payment, You only have to
                                        make the payment once in 1 year</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end welcome -->


                        <div class="row column3">
                        </div>
                        <div class="col-12 mt-4">
                            <!-- Profile Header -->


                            <!-- Profile Information -->
                            <!-- Display Success Message -->
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <div class="col-12 mt-3">
                                <div class="payment-title">
                                    <h1>Make Payment</h1>
                                </div>
                                <div class="container preload">
                                    <div class="creditcard">
                                        <div class="front">
                                            <div id="ccsingle"></div>
                                            <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;"
                                                xml:space="preserve">
                                                <g id="Front">
                                                    <g id="CardBackground">
                                                        <g id="Page-1_1_">
                                                            <g id="amex_1_">
                                                                <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                                                        C0,17.9,17.9,0,40,0z" />
                                                            </g>
                                                        </g>
                                                        <path class="darkcolor greydark"
                                                            d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                                    </g>
                                                    <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber"
                                                        class="st2 st3 st4">2000 THOUSAND NARIA</text>

                                                    <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname"
                                                        class="st2 st5 st6">{{ Auth::user()->full_name }}</text>
                                                    <text transform="matrix(1 0 0 1 54.1074 389.8793)"
                                                        class="st7 st5 st8">user name</text>
                                                    <text transform="matrix(1 0 0 1 479.7754 388.8793)"
                                                        class="st7 st5 st8">duration</text>
                                                    <text transform="matrix(1 0 0 1 65.1054 241.5)"
                                                        class="st7 st5 st8">amount</text>
                                                    <g>
                                                        <text transform="matrix(1 0 0 1 574.4219 433.8095)"
                                                            id="svgexpire" class="st2 st5 st9">1 year</text>
                                                        <text transform="matrix(1 0 0 1 479.3848 417.0097)"
                                                            class="st2 st10 st11">VALID</text>
                                                        <text transform="matrix(1 0 0 1 479.3848 435.6762)"
                                                            class="st2 st10 st11">FOR</text>
                                                        <polygon class="st2"
                                                            points="554.5,421 540.4,414.2 540.4,427.9" />
                                                    </g>
                                                    <g id="cchip">
                                                        <g>
                                                            <path class="st2"
                                                                d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                                                    c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                                        </g>
                                                        <g>
                                                            <g>
                                                                <rect x="82" y="70" class="st12" width="1.5"
                                                                    height="60" />
                                                            </g>
                                                            <g>
                                                                <rect x="167.4" y="70" class="st12" width="1.5"
                                                                    height="60" />
                                                            </g>
                                                            <g>
                                                                <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                                                        c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                                                        C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                                                        c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                                                        c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                            </g>
                                                            <g>
                                                                <rect x="82.8" y="82.1" class="st12" width="25.8"
                                                                    height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="82.8" y="117.9" class="st12" width="26.1"
                                                                    height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="142.4" y="82.1" class="st12" width="25.8"
                                                                    height="1.5" />
                                                            </g>
                                                            <g>
                                                                <rect x="142" y="117.9" class="st12" width="26.2"
                                                                    height="1.5" />
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="Back">
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <form id="paymentForm">
                                    <div class="form-submit justify-center align-middle m-auto">
                                        <button type="submit" class="btn btn-primary"
                                            onclick="payWithPaystack()">Pay with
                                            Paystack</button>
                                    </div>
                                </form>
                            </div>
                            <!-- footer -->
                            <div class="container-fluid">
                                <div class="footer">
                                    <p>Copyright © 2024 Developed by Azriel Technologies All rights reserved.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end dashboard inner -->
                    </div>
                </div>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Reply</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <form class="send_member_form" method="POST"
                                    action="../includes/send_message_mem_inc.php">
                                    <div
                                        style="position: relative; display: inline-block; background-color: darkblue; padding: 10px; border-radius: 5px; color: white; width: 10%;">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="white" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke-dasharray="66" stroke-dashoffset="66" stroke-width="2"
                                                    d="M3 14V5H21V19H3V14">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset"
                                                        dur="0.6s" values="66;0" />
                                                </path>
                                                <path stroke-dasharray="26" stroke-dashoffset="26"
                                                    d="M3 16L7 13L10 15L16 10L21 14">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset"
                                                        begin="0.6s" dur="0.4s" values="26;0" />
                                                </path>
                                            </g>
                                            <circle cx="7.5" cy="9.5" r="1.5" fill="white"
                                                fill-opacity="0">
                                                <animate fill="freeze" attributeName="fill-opacity" begin="1s"
                                                    dur="0.4s" values="0;1" />
                                            </circle>
                                        </svg>
                                        <input type="file" name="image" style="width: 100%;">
                                    </div>

                                    <button
                                        style="background: darkblue; color: white; border: none; height: 10vh; width: 100%">Reply</button>
                                </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                var ps = new PerfectScrollbar('#sidebar');
            </script>
            <!-- jQuery -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- wow animation -->
            <script src="{{ asset('js/animate.js') }}"></script>
            <!-- select country -->
            <script src="{{ asset('js/bootstrap-select.js') }}"></script>
            <!-- owl carousel -->
            <script src="{{ asset('js/owl.carousel.js') }}"></script>
            <!-- chart js -->
            <script src="{{ asset('js/Chart.min.js') }}"></script>
            <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
            <script src="{{ asset('js/utils.js') }}"></script>
            <script src="{{ asset('js/analyser.js') }}"></script>
            <!-- nice scrollbar -->
            <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
            <!-- custom js -->
            <script src="{{ asset('js/custom.js') }}"></script>
            <script src="{{ asset('js/chart_custom_style1.js') }}"></script>
            <!----Paystack integration--->
            <script src="https://js.paystack.co/v1/inline.js"></script>
            <script>
                const paymentForm = document.getElementById('paymentForm');
                paymentForm.addEventListener("submit", payWithPaystack, false);

                function payWithPaystack(e) {
                    e.preventDefault();
                    let handler = PaystackPop.setup({
                        key: "{{ env('PAYSTACK_PUBLIC_KEY') }}",
                        email: "joshuaadeyemi445@gmail.com",
                        amount: 200000,
                        metadata: {
                            custom_fields: [{
                                    display_name: "Online Medical Fee",
                                    variable_name: "Online Medical Fee",
                                    value: "Online Medical Fee"
                                },
                                {
                                    display_name: "Quantity",
                                    variable_name: "quantity",
                                    value: "1"
                                }
                            ]
                        },
                        onClose: function() {
                            alert('Window closed.');
                        },
                        callback: function(response) {
                            //let message = 'Payment complete! Reference: ' + response.reference;
                            //alert(message);
                            //alert(JSON.stringify(response));
                            window.location.href = "{{ route('callback') }}" + response.redirecturl;
                        }
                    });
                    handler.openIframe();
                }
            </script>
</body>

</html>