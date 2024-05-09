<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class="text-center my-3">
        <div class="filter-btn btn btn-primary">All</div>
        <div class="filter-btn btn btn-primary">Poems</div>
        <div class="filter-btn btn btn-primary">Articles</div>
        <div class="filter-btn btn btn-primary">Stories</div>
    </div>

    @foreach ($writing_data as $writing)

    <!-- Project One -->
    <div class="row">
        <div class="col-md-3">
            <a href="#">
                <img style="width: 350px; height: 250px" class="img-fluid rounded mb-3 mb-md-0"
                    src="{{ $writing->getImage() }}" alt="">
            </a>
        </div>
        <div class="col-md-9">
            <h3>{{ $writing->title }}</h3>
            <p>{{ $writing->type }}</p>
            <p>{{ substr($writing->description, 0, 30) }}</p>
            <a class="btn btn-primary" href="{{ $writing->getLink($data->id, $writing->id) }}">View</a>

            @if(Auth::check()&& Auth::id() ** $data->id)
            <a class="btn btn-primary"
            href="{{ route('dashboard.writings.edit',['writing'=> $writing->id]) }}">Edit</a>
            @endif

        </div>
    </div>
    <!-- /.row -->

    <hr>
    @endforeach



    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>

</div>
<!-- /.container -->
