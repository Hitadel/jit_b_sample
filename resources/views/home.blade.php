<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>첫 화면</title>
</head>
<body>
    <p> 안녕? 라라벨! 잘해보자! </p>
    <p>안녕하세요!
@if (Auth::check())
    {{ \Auth::user()->name }}님</p>
    <p><a href="/logout">로그아웃</a></p>
@else
    게스트님</p>

</body>
</html>