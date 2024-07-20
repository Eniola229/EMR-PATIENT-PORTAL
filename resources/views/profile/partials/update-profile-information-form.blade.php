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
    <title>RHC EMR | Profile</title>
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
                                    <h2>Your Profile</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end welcome -->


                        <div class="row column3">
                        </div>
                        <div class="col-12 mt-4">
                            <div class="col-12 mt-3">


                                <form method="post" action="#" class="mt-6">
                                    @csrf
                                    @method('patch')


                                    @if (session('status') === 'profile-updated')
                                        <div class="alert alert-success">
                                            <p x-data="{ show: true }" x-show="show" x-transition
                                                x-init="setTimeout(() => show = false, 2000)" class="text-sm text-muted">
                                                {{ __('Saved.') }}</p>
                                        </div>
                                    @endif


                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">{{ __('Full Name') }}</label>
                                        <input type="text" class="form-control" id="full_name" name="full_name"
                                            value="{{ old('full_name', $user->full_name) }}" required autofocus
                                            autocomplete="full_name" readonly>
                                        @error('full_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $user->email) }}" required autocomplete="username"
                                            readonly>
                                        @error('email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="state_of_residence"
                                            class="form-label">{{ __('State of Residence') }}</label>
                                        <input type="text" class="form-control" id="state_of_residence"
                                            name="state_of_residence"
                                            value="{{ old('state_of_residence', $user->state_of_residence) }}"
                                            required autofocus autocomplete="state_of_residence" readonly>
                                        @error('state_of_residence')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="date_of_birth"
                                            class="form-label">{{ __('Date of Birth') }}</label>
                                        <input type="text" class="form-control" id="date_of_birth"
                                            name="date_of_birth"
                                            value="{{ old('date_of_birth', $user->date_of_birth) }}" required
                                            autofocus autocomplete="date_of_birth" readonly>
                                        @error('date_of_birth')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                                        <input type="number" class="form-control" id="phone_number"
                                            name="phone_number"
                                            value="{{ old('phone_number', $user->phone_number) }}" required autofocus
                                            autocomplete="phone_number" readonly>
                                        @error('phone_number')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="home_address" class="form-label">{{ __('Home Address') }}</label>
                                        <input type="text" class="form-control" id="home_address"
                                            name="home_address"
                                            value="{{ old('home_address', $user->home_address) }}" required autofocus
                                            autocomplete="home_address" readonly>
                                        @error('home_address')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="d-flex align-items-center gap-4">
                                        <button type="submit" class="btn btn-primary" disabled>{{ __('Save') }}</button>

                                    </div>
                                </form>


                            </div>



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

</body>

</html>
