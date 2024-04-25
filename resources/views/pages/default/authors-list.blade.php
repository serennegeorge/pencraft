<x-mylayouts.layout-default>

    {{-- Source: https://bbbootstrap.com/snippets/classic-team-member-cards-21609083 --}}

    <style>
        body {
            margin-top: 20px;
            background: #f5f5f5;
        }

        .member {
            margin-bottom: 2rem
        }

        .member .member-top {
            position: relative;
            background-color: #d7d4d4;
            margin-bottom: 1.35rem;
            overflow: hidden
        }

        .member .member-top figure {
            position: relative
        }

        .member .member-top figure img {
            display: block;
            width: 100%;
            height: auto
        }

        .member .member-top figure:after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: #673AB7;
            opacity: 0;
            visibility: hidden;
            transition: all .65s cubic-bezier(0.92, 0.17, 0.29, 0.93) 0s;
            z-index: 50
        }

        .member .member-top .social-icons {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            -ms-flex-align: stretch;
            align-items: stretch;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 99;
            padding: 0;
            margin: 0;
            -ms-transform: translateX(-100%);
            transform: translateX(-100%);
            transition: all .65s cubic-bezier(0.92, 0.17, 0.29, 0.93) 0s
        }

        .member .member-top .social-icons label {
            color: #f2f2f2;
            font-weight: 400;
            margin-right: 4px;
            font-size: 12px
        }

        .member .member-top .social-icons .social-icon {
            display: block;
            border-radius: 0;
            margin: 0;
            width: 3rem;
            height: 3rem;
            line-height: 3rem
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .member .member-top .social-icons .social-icon {
                width: 2.7rem;
                height: 2.7rem;
                line-height: 2.7rem
            }
        }

        .member .member-title {
            font-size: 1.25rem;
            margin-bottom: 1rem
        }

        .member .member-title a {
            color: #212121
        }

        .member .member-title a:hover,
        .member .member-title a:focus {
            color: #673AB7
        }

        .member .member-title small {
            display: inline;
            font-size: 80%;
            color: #E91E63;
            font-weight: 600
        }

        .member .member-title:after {
            content: '';
            clear: both;
            display: table
        }

        .member.text-center .member-title {
            margin-bottom: 0.85rem
        }

        .member.text-center .member-title small {
            display: block;
            margin-top: 0.6rem
        }

        .member:hover .member-top figure:after {
            visibility: visible;
            opacity: 0.35
        }

        .member:hover .member-top .social-icons {
            -ms-transform: translateX(0);
            transform: translateX(0)
        }

        .swiper-container .member {
            margin-bottom: 0
        }

        .swiper-container .member p:last-child {
            margin-bottom: 0
        }


        .social-icons {
            margin-bottom: 1rem
        }

        .social-icons:after {
            content: '';
            display: table;
            clear: both
        }

        .social-icons .social-icon {
            display: inline-block;
            font-size: 1.1rem;
            width: 2.2rem;
            height: 2.2rem;
            line-height: 2.2rem;
            border-radius: 4px;
            color: #323232;
            background-color: #fff;
            transition: all .65s cubic-bezier(0.92, 0.17, 0.29, 0.93) 0s;
            margin: 0 0 0.25rem;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1)
        }

        .social-icons .social-icon+.social-icon {
            margin-left: 0.25rem
        }

        .social-icons .social-icon.circle {
            border-radius: 50%
        }

        .social-icons .social-icon:hover,
        .social-icons .social-icon:focus {
            color: #fff;
            background-color: #673AB7
        }

        .bg-white .social-icons .social-icon {
            background-color: #d7d4d4
        }

        .bg-white .social-icons .social-icon:hover,
        .bg-white .social-icons .social-icon:focus {
            color: #fff;
            background-color: #673AB7
        }

        .social-icons.circle .social-icon {
            border-radius: 50%
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">

            @foreach ($author_data as $data)

            <div class="col-md-3 col-xs-6 col-xss-12">
                <div class="member text-center">
                    <div class="member-top">
                        <figure>
                            <img style="width: 150px; height: 150px" src="{{ $data->getImage() }}" alt="">
                            alt={{ $data->name }}>
                        </figure>
                        <div class="social-icons">
                            <a href="#" class="social-icon" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="social-icon" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-icon" title="Github"><i class="fa fa-github"></i></a>
                            <a href="#" class="social-icon" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .member-top -->
                    <h3 class="member-title"><a href="#">{{ $data->name }}</a> <small>(Co-founder)</small></h3>
                    <p>{{ $data->bio }}</p>
                    <p><a href="{{ $data->getLink() }}">View Profile</a></p>

                    @endforeach



                </div>
            </div>

</x-mylayouts.layout-default>