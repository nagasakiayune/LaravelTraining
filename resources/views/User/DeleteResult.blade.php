@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/result.css') }}"
@endpush

@section('title', '削除結果')

@section('menubar')
    @parent
    削除結果
@endsection


@section('content')
        <form action = "/home" method="GET">
            @csrf
            <h3>社員情報の削除が完了しました。</h3>
            <input type = "submit" value = "社員一覧へ" class = "menu">
        </form>
@endsection
