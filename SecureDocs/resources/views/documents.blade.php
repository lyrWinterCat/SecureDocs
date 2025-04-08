<h1>문서 목록</h1>
<ul>
@foreach ($documents as $doc)
    <li>
        {{ $doc['title'] }}
        <a href="/documents/{{ $doc['id'] }}/download">다운로드</a>
    </li>
@endforeach
</ul>
