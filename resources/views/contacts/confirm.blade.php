<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせ内容確認</title>
</head>

<body>
  <div class="container">
    <form action="{{ route('process') }}" method="post">
      @csrf

      <div class="form-group">
        <label>お名前</label>
        {{$inputs['fullname']}}
        <input name="fullname" value="{{$inputs['fullname']}}" type="hidden">

        <label>性別</label>
        <!-- {{$inputs['gender']}} -->
        <p><?php if ($_POST['gender'] === "1") {
              echo '男性';
            } else {
              echo '女性';
            } ?></p>
        <input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
        <!-- <label><input name="gender" value="1" type="hidden">男性</label> -->
        <!-- <label><input name="gender" value="2" type="hidden">女性</label> -->

        <label>メールアドレス</label>
        {{$inputs['email']}}
        <input name="email" value="{{$inputs['email']}}" type="hidden">

        <label>郵便番号</label>
        {{$inputs['postcode']}}
        <input name="postcode" value="{{$inputs['postcode']}}" type="hidden">

        <label>住所</label>
        {{$inputs['address']}}
        <input name="address" value="{{$inputs['address']}}" type="hidden">

        <label>建物名</label>
        {{$inputs['building_name']}}
        <input name="building_name" value="{{$inputs['building_name']}}" type="hidden">

        <label>ご意見</label>
        {{!! nl2br(e($inputs['opinion'])) !!}}
        <input name="opinion" value="{{$inputs['opinion']}}" type="hidden">

        <button type="submit" name="action" value="submit">送信</button>
        <button type="submit" name="action" value="back">修正する</button>



    </form>
  </div>



</body>

</html>