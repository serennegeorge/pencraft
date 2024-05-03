<x-mylayouts.layout-dashboard-default>


    <a href="{{ route('dashboard.writings.create') }}">Add new writings</a>


    @foreach ($writing_data as $writing)
    <div>
        <p>Article title: {{ $writing->title }}</p>
        <p>Article type: {{ $writing->type }}</p>
        <p>Article link: <a href="{{ $writing->getLink($author->id, $writing->id) }}">Link</a></p>
        <p>Article edit: <a href="{{ route('dashboard.writings.edit', ['writing' => $writing->id]) }}">Edit</a></p>

        <form action="{{ route('dashboard.writings.destroy', ['writing' => $writing->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
        </form>



    </div>
    @endforeach


</x-mylayouts.layout-dashboard-default>
