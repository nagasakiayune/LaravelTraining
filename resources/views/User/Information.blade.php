@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/information.css') }}"
@endpush

@section('title', '社員情報')

@section('menubar')
    @parent
    社員情報
@endsection


@section('content')
    <form action = "/create" method="GET">
        @csrf
        <div class = "menu_parent">
            <input type = "submit" value = "新規登録" class = "menu">
        </div>
    </form>
    <div class = "index">
        <h3>社員情報一覧</h3>
        <table>
           <tr>
                <th>id</th>
                <th>社員コード</th>
                <th>姓名</th>
                <th>姓名ローマ字</th>
                <th>入社年月日</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            @foreach ($staffs as $item)
                <tr>
                    <input type = "hidden" name = "id" value = "{{$item->id}}">
                    <td>{{$item->id}}</td>
                    <td>{{$item->staff_code}}</td>
                    <td>{{$item->last_name}}{{$item->first_name}}</td>
                    <td>{{$item->last_name_romaji}}{{$item->first_name_romaji}}</td>
                    <td>{{$item->joined_year}}</td>
                    <form action = "/update/{{$item->id}}" method="GET">
                        @csrf
                        <td><input type = "submit" value = "更新" class = "buttom_update"></td>
                    </form>
                    <form action = "/delete/{{$item->id}}" method="GET">
                        @csrf
                        <td><input type = "submit" value = "削除" class = "buttom_delete"></td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>

    <form action = "/home" method="GET">
        @csrf
        <input type = "submit" value = "戻る" class = "return">
    </form>
@endsection
