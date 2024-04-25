<x-mylayouts.layout-default>

    <div class="card">
    </div class="card-body">

    <h1>Pencraft</h1>
    <p>Written By: <a href="http://localhost:8000/authors/1">{{ $author->name }}</a></p>
    <p>Read Time: {{ $writing->read_time . ' ' . $writing->read_unit }}</p>
    <p>Category: {{ $writing->type }}</p>
    <hr>

    <div class="content">
        <div class="writing-image text-center">
            <img style="max-height: 200px; text-align: center;"
                src="http://localhost:8000/storage/images/profile/author11.webp" alt="Image">
        </div>

        {{ $writing->description }}
    </div>
    </div>





</x-mylayouts.layout-default>
