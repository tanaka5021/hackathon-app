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

<body>
    <h1>問い合わせ管理システム</h1>
    <div>
        @if (session('feedback.success'))
        <p style="color: goldenrod">{{ session('feedback.success') }}</p>
        @endif

        @foreach ($inquiry as $inquiry)
        <details>
            <summary>{{ $inquiry->question_content }} by {{ $inquiry->user->name }}
            </summary>
            <div>
                <a href="{{ route('response.update.index', ['inquiryId' => $inquiry->id]) }}">編集</a>
            
                <form action="{{ route('response.delete', ['inquiryId' => $inquiry->id])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">削除</button>
                </form>
            </div>
            <p>
            {{ $inquiry -> statas}}
            {{ $inquiry -> question_content }}
            {{ $inquiry -> customer_name }}
            {{ $inquiry -> rep_name }}
            {{ $inquiry -> rep_dividion }}
            {{ $inquiry -> question_data }}
            {{ $inquiry -> respond_data }}
            {{ $inquiry -> respond_content }}
            {{ $inquiry -> created_at }}
            {{ $inquiry -> updata_at }}
            </p>
        </details>
 
        @endforeach
    </div>
</body>
</html>