@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif

<form action="/" method="post">
@csrf
  氏名<br>
  <input type="text" name="name"><br>
  メールアドレス<br>
  <input type="text" name="email">
  <br>
  <input type="submit" value="送信する">

</form>