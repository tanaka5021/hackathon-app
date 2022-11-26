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
<h1>問い合わせ編集</h1>
<div>
    <a href="{{ route('response.index') }}">< 戻る</a>
    <p>投稿フォーム</p>
    @if(session('feedback.success'))
    <p style="color: green">{{ session('feedback.success') }}</p>
    @endif
    <form action="{{ route('response.update.put' , ['inquiryId' => $inquiry ->id]) }}" method="post">
        @method('PUT')
        @csrf
        <label for="question-content">内容</label>

        <textarea id="question-content" type="text" name="question_content" 
            placeholder="問い合わせ内容を入力">{{ $inquiry->question_content }}</textarea>
            @error('question_content')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <button type="submit">編集</button>
    </form>
</div>
</html>