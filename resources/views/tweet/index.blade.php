<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <x-layout title="TOP | つぶやきアプリ">
        <x-layout.single>
            <h2 class="text-center text-orange-500 hover:bg-blue-600 text-4xl font-bold mt-8 mb-8">
                Ứng dụng này là của anh Nguyên 12
            </h2>
            <img class="mx-auto my-auto" src="{{asset('logo/pokeball-png-45353.png')}}" width="200px">

            <x-tweet.form.post></x-tweet.form.post>
            <x-tweet.list :tweets="$tweets"></x-tweet.list>
        </x-layout.single>

        {{-- コードを付け加えます --}}

    </x-layout>
    {{-- <div>
        <p>投稿</p>
        @if (session('feedback.success'))
            <p style="color:green">{{ session('feedback.success') }}</p>
        @endif
        <form action="{{route('tweet.create')}}" method="post">
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea name="tweet" id="tweet-content" placeholder="つぶやきを入カ"></textarea>
            @error('tweet')
                <p style = "color:red">{{$message}}</p>
            @enderror
            <button type="submit">投稿</button>

        </form>
    </div>
    <div>
        @foreach ($tweets as $tweet)
        <details>
        <summary><p>{{$tweet->content}} by {{$tweet->user->name}}</p>
        </summary>
        <p>{{$tweet->content}} by {{$tweet->user->name}}</p>

        @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
        <div>
            <a href="{{ route('tweet.update.index',['tweetId'=> $tweet->id])}}">編集</a>
            <form action="{{route('tweet.delete', ['tweetId'=> $tweet->id])}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">削除</button>
            </form>
        </div>
    @else
        編集できません
    @endif
        </details>
        @endforeach
    </div> --}}
</body>
</html>
