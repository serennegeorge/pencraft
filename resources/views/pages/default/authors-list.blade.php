<x-mylayouts.layout-default>


    {{-- Source: https://www.bootdey.com/snippets/view/profile-with-followers-with-cover-photo#css--}}

    <style>
        body {
            padding-top: 20px;
            background-color: #f1f5f9;
        }

        .card {
            border: 0;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 20, .08), 0 1px 2px rgba(0, 0, 20, .08);
        }

        .rounded-bottom {
            border-bottom-left-radius: 0.375rem !important;
            border-bottom-right-radius: 0.375rem !important;
        }

        .avatar-xxl {
            height: 7.5rem;
            width: 7.5rem;
        }

        .nav-lt-tab {
            border-top: 1px solid var(--dashui-border-color);
        }

        .px-4 {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem;
        }

        .nav-lt-tab .nav-item {
            margin: -0.0625rem 1rem 0;
        }

        .nav-lt-tab .nav-item .nav-link {
            border-radius: 0;
            border-top: 2px solid transparent;
            color: var(--dashui-gray-600);
            font-weight: 500;
            padding: 1rem 0;
        }

        .pt-20 {
            padding-top: 8rem !important;
        }

        .avatar-xxl.avatar-indicators:before {
            bottom: 5px;
            height: 16%;
            right: 17%;
            width: 16%;
        }

        .avatar-online:before {
            background-color: #198754;
        }

        .avatar-indicators:before {
            border: 2px solid #FFF;
            border-radius: 50%;
            bottom: 0;
            content: "";
            display: table;
            height: 30%;
            position: absolute;
            right: 5%;
            width: 30%;
        }

        .avatar-xxl {
            height: 7.5rem;
            width: 7.5rem;
        }

        .mt-n10 {
            margin-top: -3rem !important;
        }

        .me-2 {
            margin-right: 0.5rem !important;
        }

        .align-items-end {
            align-items: flex-end !important;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .border-2 {
            --dashui-border-width: 2px;
        }

        .border {
            border: 1px solid #dcdcdc !important;
        }

        .py-6 {
            padding-bottom: 1.5rem !important;
            padding-top: 1.5rem !important;
        }

        .bg-gray-300 {
            --dashui-bg-opacity: 1;
            background-color: #cbd5e1 !important;
        }

        .mb-6 {
            margin-bottom: 1.5rem !important;
        }

        .align-items-center {
            align-items: center !important;
        }


        .mb-4 {
            margin-bottom: 1rem !important;
        }

        .mb-8 {
            margin-bottom: 2rem !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }

        .card>.list-group:last-child {
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            border-bottom-width: 0;
        }

        .card>.list-group:first-child {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-top-width: 0;
        }

        .card>.list-group {
            border-bottom: inherit;
            border-top: inherit;
        }

        .avatar-xl {
            height: 5rem;
            width: 5rem;
        }

        .avatar {
            display: inline-block;
            height: 3rem;
            position: relative;
            width: 3rem;
        }

        .mt-n7 {
            margin-top: -1.75rem !important;
        }

        .ms-4 {
            margin-left: 1rem !important;
        }

        .avatar img {
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%;
        }
    </style>

    @foreach ($author_data as $data)

    <div class="container">

        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-20 rounded-top" style="background:
              url(https://bootdey.com/image/480x480/00FFFF/000000) no-repeat;
              background-size: cover;">
                </div>
                <div class="card rounded-bottom smooth-shadow-sm">
                    <div class="d-flex align-items-center justify-content-between
                pt-4 pb-6 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-xxl avatar-indicators avatar-online me-2
                    position-relative d-flex justify-content-end
                    align-items-end mt-n10">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" class="avatar-xxl
                    rounded-circle border border-2 " alt="Image">
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-0">Jitu Chauhan
                                    <a href="#!" class="text-decoration-none">

                                    </a>
                                </h2>
                                <p class="mb-0 d-block">@imjituchauhan</p>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-primary
                    d-none d-md-block">Edit Profile</a>
                        </div>
                    </div>
                    <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" href="#"> Followers </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="py-6">

            @endforeach

            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Karina Clark</h4>
                            <p>UX Desginer</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-primary">Follow</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            id="dropdownMenuOne" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOne">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Dianna Smiley</h4>
                            <p>Full Stack Developer</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-secondary">Following</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            id="dropdownMenuTwo" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuTwo">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Anne Brewer</h4>
                            <p>Content Marketing Managers</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-primary">Follow</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" id="dropdownMenuThree"
                                            class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuThree">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Diane Baughman</h4>
                            <p>Senior UX Designer</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-primary">Follow</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            id="dropdownMenuFour" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuFour">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Roland Thomas</h4>
                            <p>Front-End Enginee</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-secondary">Following</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            id="dropdownMenuFive" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuFive">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- card -->
                    <div class="card mb-5 rounded-3">
                        <div>
                            <img src="https://bootdey.com/image/480x180/191970/ffffff" alt="Image"
                                class="img-fluid rounded-top">
                        </div>
                        <!-- avatar -->
                        <div class="avatar avatar-xl mt-n7 ms-4">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Image" class="rounded-circle border-4
                    border-white-color-40">
                        </div>
                        <!-- card body -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="mb-1">Joshua George</h4>
                            <p>UX Desginer</p>
                            <div>
                                <!-- Dropdown -->
                                <div class="d-flex justify-content-between
                      align-items-center">
                                    <a href="#!" class="btn btn-outline-primary">Follow</a>
                                    <div class="dropdown dropstart">
                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                            id="dropdownMenuSix" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-vertical icon-xs">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSix">
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text me-2 icon-xxs dropdown-item-icon">
                                                    <path
                                                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                    </path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>Report</a>
                                            <a class="dropdown-item d-flex align-items-center" href="#!"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-slash me-2 icon-xxs dropdown-item-icon">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                                                </svg>Block</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-mylayouts.layout-default>