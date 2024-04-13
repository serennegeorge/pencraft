<x-mylayouts.layout-default>

    {{-- Source: https://bootdey.com/snippets/view/User-list-cards--}}

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            background-color: #f0f3f5;
            margin-top: 40px;
        }

        /*==============================*/
        /*====== siderbar user profile =====*/
        /*==============================*/
        .nav>li>a.userdd {
            padding: 5px 15px
        }

        .userprofile {
            width: 100%;
            float: left;
            clear: both;
            margin: 40px auto
        }

        .userprofile .userpic {
            height: 100px;
            width: 100px;
            clear: both;
            margin: 0 auto;
            display: block;
            border-radius: 100%;
            box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .userprofile .userpic .userpicimg {
            height: auto;
            width: 100%;
            border-radius: 100%;
        }

        .username {
            font-weight: 400;
            font-size: 20px;
            line-height: 20px;
            color: #000000;
            margin-top: 20px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .username+p {
            color: #607d8b;
            font-size: 13px;
            line-height: 15px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .settingbtn {
            height: 30px;
            width: 30px;
            border-radius: 30px;
            display: block;
            position: absolute;
            bottom: 0px;
            right: 0px;
            line-height: 30px;
            vertical-align: middle;
            text-align: center;
            padding: 0;
            box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 2px 5px 0 rgba(0, 0, 0, 0.15);
        }

        .userprofile.small {
            width: auto;
            clear: both;
            margin: 0px auto;
        }

        .userprofile.small .userpic {
            height: 40px;
            width: 40px;
            margin: 0 10px 0 0;
            display: block;
            border-radius: 100%;
            box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 3px 10px 0 rgba(0, 0, 0, 0.15);
            position: relative;
            float: left;
        }

        .userprofile.small .textcontainer {
            float: left;
            max-width: 100px;
            padding: 0
        }

        .userprofile.small .userpic .userpicimg {
            min-height: 100%;
            width: 100%;
            border-radius: 100%;
        }

        .userprofile.small .username {
            font-weight: 400;
            font-size: 16px;
            line-height: 21px;
            color: #000000;
            margin: 0px;
            float: left;
            width: 100%;
        }

        .userprofile.small .username+p {
            color: #607d8b;
            font-size: 13px;
            float: left;
            width: 100%;
            margin: 0;
        }

        /*==============================*/
        /*====== Social Profile css =====*/
        /*==============================*/
        .countlist h3 {
            margin: 0;
            font-weight: 400;
            line-height: 28px;
        }

        .countlist {
            text-transform: uppercase
        }

        .countlist li {
            padding: 15px 30px 15px 0;
            font-size: 14px;
            text-align: left;
        }

        .countlist li small {
            font-size: 12px;
            margin: 0
        }

        .followbtn {
            float: right;
            margin: 22px;
        }

        .userprofile.social {
            background: url(http://placehold.it/500x300) no-repeat top center;
            background-size: 100%;
            padding: 50px 0;
            margin: 0
        }

        .userprofile.social .username {
            color: #ffffff
        }

        .userprofile.social .username+p {
            color: #ffffff;
            opacity: 0.8
        }

        .postbtn {
            position: absolute;
            right: 5px;
            top: 5px;
            z-index: 9
        }

        .status-upload {
            width: 100%;
            float: left;
            margin-bottom: 15px
        }

        .posttimeline .panel {
            margin-bottom: 15px
        }

        .commentsblock {
            background: #f8f9fb;
        }

        .nopaddingbtm {
            margin-bottom: 0
        }

        /*==============================*/
        /*====== Recently connected  heading =====*/
        /*==============================*/
        .memberblock {
            width: 100%;
            float: left;
            clear: both;
            margin-bottom: 15px
        }

        .member {
            width: 24%;
            float: left;
            margin: 2px 1% 2px 0;
            background: #ffffff;
            border: 1px solid #d8d0c3;
            padding: 3px;
            position: relative;
            overflow: hidden
        }

        .memmbername {
            position: absolute;
            bottom: -30px;
            background: rgba(0, 0, 0, 0.8);
            color: #ffffff;
            line-height: 30px;
            padding: 0 5px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            width: 100%;
            font-size: 11px;
            transition: 0.5s ease all;
        }

        .member:hover .memmbername {
            bottom: 0
        }

        .member img {
            width: 100%;
            transition: 0.5s ease all;
        }

        .member:hover img {
            opacity: 0.8;
            transform: scale(1.2)
        }

        .panel-default>.panel-heading {
            color: #607D8B;
            background-color: #ffffff;
            font-weight: 400;
            font-size: 15px;
            border-radius: 0;
            border-color: #e1eaef;
        }



        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 0;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.428571429;
        }

        .page-header.small {
            position: relative;
            line-height: 22px;
            font-weight: 400;
            font-size: 20px;
        }

        .favorite i {
            color: #eb3147;
        }

        .btn i {
            font-size: 17px;
        }

        .panel {
            box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.05);
            -webkit-box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.05);
            -ms-box-shadow: 0px 2px 10px 0 rgba(0, 0, 0, 0.05);
            transition: all ease 0.5s;
            -moz-transition: all ease 0.5s;
            -webkit-transition: all ease 0.5s;
            -ms-transition: all ease 0.5s;
            margin-bottom: 35px;
            border-radius: 0px;
            position: relative;
            border: 0;
            display: inline-block;
            width: 100%;
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #ffffff;
            border-top: 1px solid #eef2f4;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            color: #607d8b;
        }

        .panel-blue {
            color: #ffffff;
            background-color: #03A9F4;
        }

        .panel-red.userlist .username,
        .panel-green.userlist .username,
        .panel-yellow.userlist .username,
        .panel-blue.userlist .username {
            color: #ffffff;
        }

        .panel-red.userlist p,
        .panel-green.userlist p,
        .panel-yellow.userlist p,
        .panel-blue.userlist p {
            color: rgba(255, 255, 255, 0.8);
        }

        .panel-red.userlist p a,
        .panel-green.userlist p a,
        .panel-yellow.userlist p a,
        .panel-blue.userlist p a {
            color: rgba(255, 255, 255, 0.8);
        }

        .progress-bar-success,
        .status.active,
        .panel-green,
        .panel-green>.panel-heading,
        .btn-success,
        .fc-event,
        .badge.green,
        .event_green {
            color: white;
            background-color: #8BC34A;
        }

        .progress-bar-warning,
        .panel-yellow,
        .status.pending,
        .panel-yellow>.panel-heading,
        .btn-warning,
        .fc-unthemed .fc-today,
        .badge.yellow,
        .event_yellow {
            color: white;
            background-color: #FFC107;
        }

        .progress-bar-danger,
        .panel-red,
        .status.inactive,
        .panel-red>.panel-heading,
        .btn-danger,
        .badge.red,
        .event_red {
            color: white;
            background-color: #F44336;
        }
    </style>

    <div class="py-5 bg-light team1">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 text-center">
                    <h3 class="mb-3">Welcome to Pencraft</h3>
                    <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our
                        customer services will be great experience for you without doubt and in no-time</h6>
                </div>
            </div>
            <div class="row">


                @foreach ($author_data as $data)

                <!-- column  -->
                <div class="col-lg-6">
                    <div class="card card-shadow border-0 mb-4">
                        <!-- Row -->
                        <div class="row no-gutters">
                            <div class="col-md-5 pro-pic"
                                style="background:url('{{ $data->getImage() }}') no-repeat center center / cover">
                                <div class="card-img-overlay">
                                    <ul class="list-inline position-relative text-center">
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="text-decoration-none d-block text-white px-1"><i
                                                    class="icon-social-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7 bg-white">
                                <div class="p-4">
                                    <h6 class="mb-3 font-weight-medium">{{ $data->name }}</h6>
                                    <p>{{ $data->bio }}</p>
                                    <p><a href="{{ $data->getLink() }}">View Profile</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                </div>
                <!-- column  -->
                @endforeach


            </div>

        </div>
    </div>



</x-mylayouts.layout-default>
