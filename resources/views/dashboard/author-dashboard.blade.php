<x-mylayouts.layout-dashboard-default>

    <a href="{{ route('dashboard.writings.create') }}">Add new writings</a>

    {{ route('dashboard.writings.create') }}

    @foreach ($writing_data as $writing)
    <div>
        <p>Article title: {{ $writing->title }}</p>
        <p>Article type: {{ $writing->type }}</p>
        <p>Article link: <a href="{{ $writing->getLink($author->id, $writing->id) }}">Link</>
        </p>
    </div>
    @endforeach

</x-mylayouts.layout-dashboard-default>