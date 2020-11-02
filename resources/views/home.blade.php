@extends('layouts.app')

@section('content')
<div class="card" style="width: 100%;">
    <div class="card-header">
        <strong>メモ一覧</strong>
        <a href="{{ route('submit')}}" class="submit">メモを追加</a>
    </div>

    <div class="card-body">
            @foreach ($memos as $memo)
            {{$memo->title}}
            <div class="text-right">
            <a class="btn btn-success" href="{{ route('submit', ['id' => $memo->id])}}">編集</a>
            <a class="btn btn-danger" href="{{ route('delete',['id' => $memo->id ]) }}">削除</a>
            </div>
            <hr>
            @endforeach

    </div>
</div>
@endsection
