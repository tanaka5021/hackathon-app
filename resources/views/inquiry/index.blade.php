<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,user-scalable=no,initial-scale=1.0,
        maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>問い合わせ管理システム</title>
</head>
<h1>問い合わせ管理システム</h1>
<div>
    <p>投稿フォーム</p>
    <form action="{{ route('inquiry.create') }}" method="post">
        @csrf

        @auth
        <div>
        <label for="inquiry-detail">問い合わせ内容</label>
        <textarea id="inquiry-detail" type="text" name="question_content"
        placeholder="問い合わせ内容を入力"></textarea>
        @error('question_content')
        <p style="color: blueviolet;">{{ $message }}</p>            
        @enderror
        </div>
    
        <div>
        <label for="inquiry-name">お名前</label>
        <textarea id="inquiry-name" type="text" name="customer_name"
        placeholder=""></textarea>
        @error('customer_name')
        <p style="color: blueviolet;">{{ $message }}</p>            
        @enderror
        </div>

        <button type="submit">送信</button>
    </form>
</div>
@endauth

</html>