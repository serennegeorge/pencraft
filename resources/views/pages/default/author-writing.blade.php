<x-mylayouts.layout-default>

    <div class="card">
        <div class="card-body">

            <h1>{{ $writing->title }}</h1>
            <p>Written By: <a href="{{ $author->getLink() }}">{{ $author->name }}</a></p>
            <p>Read Time: {{ $writing->read_time . ' ' . $writing->read_unit }}</p>
            <p>Category: {{ $writing->type }}</p>
            <hr>

            <div class="content">
                <div class="writing-image text-center">
                    <img style="max-height: 200px; text-align: center;" src="{{ $writing->getImage() }}" alt="Image">
                    src="{{ $writing->getImage() }}" alt="Image">
                </div>

                {{ $writing->description }}
            </div>
        </div>

        {{-- {!! $writing->description !!} --}}

    </div>



    </div>
    <div class="card-footer text-center">
        <a class="btn btn-default" href="{{ route('authors.show', ['author' => $author->id]) }}">Connect with
            author</a>

    </div>
    </div>



</x-mylayouts.layout-default>