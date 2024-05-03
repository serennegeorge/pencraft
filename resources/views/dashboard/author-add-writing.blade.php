<x-mylayouts.layout-dashboard-default>

    <!-- Source: https://laravel.com/docs/11.x/validation#quick-displaying-the-validation-errors -->


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

    <style>
        .profile-edit-image {
            width: 200px;
            height: 200px;
        }
    </style>


    <div class="card1">
        <div class="card-body1">

            <h1>TITLE GOES HERE</h1>

            <form action="{{ route('dashboard.writings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="type">Type:</label>
                    <select name="type" id="type" class="form-control">
                        <option value="story">Story</option>
                        <option value="article">Article</option>
                        <option value="poem">Poem</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="">
                </div>


                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="5" name="description" id="description"></textarea>
                </div>


                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>


                <div class="form-group">
                    <label for="read_time">Read Time:</label>
                    <input type="text" class="form-control" name="read_time" id="read_time" value="1">
                </div>


                <div class="form-group">
                    <label for="read_unit">Read Unit</label>
                    <select name="read_unit" id="read_unit" class="form-control">
                        <option value="minutes">Minute(s)</option>
                        <option value="hours">Hour(s)</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a class="btn btn-danger" href="{{ route('dashboard.authors.index') }}">Cancel</a>
                </div>

            </form>
        </div>
    </div>


</x-mylayouts.layout-dashboard-default>
