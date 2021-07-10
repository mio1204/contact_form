<!doctype html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>お問い合わせフォーム</title>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>

<body>

  <div class="container">
    <form action="{{ route('confirm') }}" method="post">
      @csrf

      <div class="form-group">
        <label>お名前</label><span>※</span>
        <input name="fullname" value="{{old('fullname')}}" type="text">
        @if ($errors->first('fullname'))
        <p class="validation">※{{$errors->first('fullname')}}</p>
        @endif

        <label>性別</label><span>※</span>
        <label><input name="gender" type="radio" checked="checked" value="1" {{ old('gender') == "1" ? 'checked' : '' }}>男性</label>
        <label><input name="gender" type="radio" value="2" {{ old('gender') == "2" ? 'checked' : '' }}>女性</label>

        <label>メールアドレス</label><span>※</span>
        <input name="email" value="{{old('email')}}" type="text">
        @if ($errors->first('email'))
        <p class="validation">※{{$errors->first('email')}}</p>
        @endif

        <label>郵便番号</label><span>※</span>
        <span>〒</span><input name="postcode" value="{{old('postcode')}}" type="text" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
        @if ($errors->first('postcode'))
        <p class="validation">※{{$errors->first('postcode')}}</p>
        @endif

        <label>住所</label><span>※</span>
        <input name="address" value="{{old('address')}}" type="text" size="60">
        @if ($errors->first('address'))
        <p class="validation">※{{$errors->first('address')}}</p>
        @endif

        <label>建物名</label>
        <input name="building_name" value="{{old('building_name')}}" type="text">

        <label>ご意見</label><span>※</span>
        <textarea name="opinion">{{old('opinion')}}</textarea>
        @if ($errors->first('opinion'))
        <p class="validation">※{{$errors->first('opinion')}}</p>
        @endif

        <button type="submit">確認</button>

    </form>
  </div>



</body>

</html>