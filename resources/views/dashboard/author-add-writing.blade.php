<x-mylayouts.layout-dashboard-default>
    
<!-- /resources/views/post/create.blade.php -->

    <h1>Create Post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Create Post Form -->


    <form action="{{ route('dashboard.writings.store') }}" method="POST">
        @csrf
        @method('POST')
        <p>Type</p>
        <p><input type="text" name="type"></p>
        <p>Title</p>
        <p><input type="text" name="title"></p>
        <p>Description</p>
        <p><input type="text" name="description"></p>
        <p>Image</p>
        <p><input type="text" name="image"></p>
        <p>Read Time</p>
        <p><input type="text" name="read_time"></p>
        <p>Read Unit</p>
        <p><input type="text" name="read_unit"></p>

        <p>
            <button type="submit">Click</button>
            <a href="#">Cancel</a>
        </p>
    </form>

</x-mylayouts.layout-dashboard-default>