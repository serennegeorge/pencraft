<x-mylayouts.layout-default>

    <div class="container">
        <div class="row">


            @foreach ($author_data as $data)

            <div class="col-md-12">
                <img style="width: 150px; height: 150px" src="{{ $data->getImage() }}" alt="">
                <p>Author: {{ $data->name }}</p>
                <p>Bio: {{ $data->bio }}</p>
                <p><a href="{{ $data->getLink() }}">Link</a></p>
            </div>

            @endforeach



        </div>
    </div>

</x-mylayouts.layout-default>
