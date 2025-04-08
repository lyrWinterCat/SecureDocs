<h1>{{ $title }}</h1>
<p>이 문서는 기밀문서입니다.</p>

<footer>
    다운로드 사용자: {{ $user->email }} <br>
    다운로드 시간: {{ $timestamp }}
</footer>
