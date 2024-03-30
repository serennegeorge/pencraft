<x-mylayouts.layout-dashboard-default>
    @foreach ($writing_data as $writing)
    <div>
        <p>Article title: {{ $writing->title }}</p>
        <p>Article type: {{ $writing->type }}</p>
        <p>Article link: <a href="{{ $writing->getLink($author->id, $writing->id) }}">Link</a></p>
    </div>
    @endforeach

</x-mylayouts.layout-dashboard-default>