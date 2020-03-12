@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Eleven</h1>
        <p class="lead">
            这是一个音乐有偿分享的平台。
        </p>
        <p>
            一切将从这里开始。
        </p>
        <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
        </p>
    </div>
@stop