<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<html> 
  <body>
  <form action="{{url('/hello/result')}}" method="POST">
  {{ csrf_field( ) }}
<label for="name">お名前</label>
<input type="text"name="name">

<label for="name">住所</label>
<input type="text"name="address">

<label for="name">年齢</label>
<input type="text"name="age">
<input type="submit">
</form>
</html>