@foreach ($writing_data as $writing)
<div>
    <p>Article title: {{ $writing->title }}</p>
    <p>Article type: {{ $writing->type }}</p>
    <p>Article link: <a href="{{ $writing->getLink($data->id, $writing->id) }}">Link</a></p>
</div>
@endforeach