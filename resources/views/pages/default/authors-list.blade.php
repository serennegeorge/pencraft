<x-mylayouts.layout-default>


    {{-- Source: https://bbbootstrap.com/snippets/classic-team-member-cards-21609083 --}}

    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);

        .team1 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
        }

        .team1 h1,
        .team1 h2,
        .team1 h3,
        .team1 h4,
        .team1 h5,
        .team1 h6 {
            color: #3e4555;
        }

        .team1 .font-weight-medium {
            font-weight: 500;
        }

        .team1 .bg-light {
            background-color: #f4f8fa !important;
        }

        .team1 .subtitle {
            color: #8d97ad;
            line-height: 24px;
        }

        .team1 .pro-pic {
            min-height: 200px;
        }

        .team1 .pro-pic .card-img-overlay {
            background: rgba(26, 139, 243, 0.87);
            display: none;
        }

        .team1 .pro-pic .card-img-overlay ul {
            top: 50%;
        }

        .team1 .pro-pic .card-img-overlay ul li a {
            -webkit-transition: 0.1s ease-in;
            -o-transition: 0.1s ease-in;
            transition: 0.1s ease-in;
        }

        .team1 .pro-pic .card-img-overlay ul li a:hover {
            -webkit-transform: translate3d(0px, -5px, 0px);
            transform: translate3d(0px, -5px, 0px);
        }

        .team1 .pro-pic:hover .card-img-overlay {
            display: block;
        }
    </style>


    <div class="py-5 bg-light team1">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-7 text-center">
                    <h3 class="mb-3">Experienced & Professional Team</h3>
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