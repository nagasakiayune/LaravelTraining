@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/result.css') }}"
@endpush

@section('title', '更新結果')

@section('menubar')
    @parent
    更新結果
@endsection


@section('content')
        <form action = "/home" method="GET">
            @csrf
            <h3>社員情報の更新が完了しました。</h3>
            <input type = "submit" value = "社員一覧へ" class = "menu">
        </form>
@endsection
