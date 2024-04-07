<x-mylayouts.layout-dashboard-default>



    <form action="{{ route ('dashboard.authors.update',[author->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="errors">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach

        </div>


        <div class="card1">
            <div class="card-body1">

                <h1>hey</h1>

                <form action="{{ route('dashboard.authors.update', ['author' => $author->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="profile-edit-image">
                        <img style="width: 200px; height:200px" class="img-fluid rounded"
                            src="{{ $author->getImage() }}" alt="Image" id="image_preview">
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="image">Profile:</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $author->name }}">
                    </div>


                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea class="form-control" rows="5" name="bio" id="bio">{{ $author->bio }}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                        <a class="btn btn-danger" href="{{ route('dashboard.authors.index') }}">Cancel</a>
                    </div>

                </form>


            </div>
        </div>


</x-mylayouts.layout-dashboard-default>
author-edit ... p.blade.php
Displaying author-edit-profile-bootstrap.blade.php.
