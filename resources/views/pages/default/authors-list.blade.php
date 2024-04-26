<x-mylayouts.layout-default>

    {{-- Source:https://bootdey.com/snippets/view/bs4-team-list#css--}}

    <style>
        body {
            background-color: #eee;
            margin-top: 20px;
        }

        .border-5,
        .border-w-5 {
            border-width: 5px !important;
        }

        .border-white {
            border: 1px solid transparent;
            border-color: #fff !important;
        }

        hr.hr-primary {
            border-top-color: #CC164D !important;
        }

        em {
            font-style: italic;
        }

        .font-weight-normal {
            font-weight: 400 !important;
        }
    </style>

    <div class="container py-7">
        <h2 class="text-uppercase text-letter-spacing-xs my-0 text-dark font-weight-bold">
            Our Team <i class="ion-ios-body pl-1 text-primary op-8 z-index-1"></i>
        </h2>
        <hr class="hr-primary w-15 hr-xl ml-0 mb-5">
        <div class="row mb-5">

            @foreach ($author_data as $data)

            <div class="col-md-6 order-md-2">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Author"
                    class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
            </div>
            <div class="col-md-6 flex-valign text-md-right">
                <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
                    {{ $data->name }}
                </h3>
                <h5 class="my-0 font-weight-normal">
                    <em>Author</em>
                </h5>
                <hr class="hr-primary w-70 ml-0 ml-md-auto mr-md-0 mb-3">
                <p>
                <p>{{ $data->bio }}</p>
                </p>
                <p><a href="{{ $data->getLink() }}">View Profile</a></p>
                <a href="#join" data-toggle="scroll-link" class="text-sm font-weight-bold"><i
                        class="fa fa-chevron-right text-xs text-pink"></i></a>
            </div>
        </div>
        @endforeach




</x-mylayouts.layout-default>
