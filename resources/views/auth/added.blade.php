@extends('layouts.logout')

@section('content')

{!! Form::open(['url' => '/added']) !!}

<div id="clear">
  <p>{{ $request->username }}さん</p>
  <p>ようこそ！AtlasSNSへ！</p>
  <p>ユーザー登録が完了しました。</p>
  <p>早速ログインをしてみましょう。</p>

  <p class="btn"><a href="/login">ログイン画面へ</a></p>
</div>

{!! Form::close() !!}

@endsection
