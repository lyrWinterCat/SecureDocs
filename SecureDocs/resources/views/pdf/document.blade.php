<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @font-face {
            font-family: 'NanumGothic';
            font-weight: normal;
            font-style: normal;
            src: url("{{ public_path('fonts/NanumGothic.ttf') }}") format('truetype');
        }
        
        body {
            font-family: 'NanumGothic', sans-serif !important;
        }
        
        h1, p, footer {
            font-family: 'NanumGothic', sans-serif !important;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>This is Secret Document.</p>

    <footer>
        Download User: {{ $user->email }} <br>
        Download time: {{ $timestamp }}
    </footer>
</body>
</html>
