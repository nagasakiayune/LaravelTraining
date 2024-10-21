@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}"
@endpush

@section('title', '社員情報削除')

@section('menubar')
    @parent
    社員情報削除
@endsection


@section('content')
    <div class = "block">
        <form action = "/deleteResult" method = "POST">
            @csrf
            <h3>社員情報</h3>
            <p>（<span>※</span>）がついている項目は入力必須項目です。</p>
            <table>
                <input type = "hidden" name = "id" value = "{{$form->id}}" readonly>
                <tr>
                    <th>社員コード（<span>※</span>）:</th>
                    <td><input type = "text" name = "staff_code" value = "{{$form->staff_code}}" readonly></td>
                <tr>
                <tr>
                    <th>姓（<span>※</span>）:</th>
                    <td><input type = "text" name = "last_name" value = "{{$form->last_name}}" readonly></td>
                <tr>
                <tr>
                    <th>名（<span>※</span>）:</th>
                    <td><input type = "text" name = "first_name" value = "{{$form->first_name}}" readonly></td>
                <tr>
                <tr>
                    <th>姓ローマ字（<span>※</span>）:</th>
                    <td><input type = "text" name = "last_name_romaji" value = "{{$form->last_name_romaji}}" readonly></td>
                <tr>
                <tr>
                    <th>名ローマ字（<span>※</span>）:</th>
                    <td><input type = "text" name = "first_name_romaji" value = "{{$form->first_name_romaji}}" readonly></td>
                <tr>
                <tr>
                    <th>所属（<span>※</span>）:</th>
                    <td><select name = "staff_department" disabled>
                        <option value="">--------------</option>
                        <option value="0001">エンジニア</option>
                        <option value="0002">営業</option>
                        <option value="0003">コーポレート</option>
                        @if ($form->staff_department === "0001")
                            <script>
                                document.querySelector('select').value = '0001';
                            </script>
                        @elseif ($form->staff_department === "0002")
                            <script>
                                document.querySelector('select').value = '0002';
                            </script>
                        @elseif ($form->staff_department === "0003")
                            <script>
                                document.querySelector('select').value = '0003';
                            </script>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>入社年月日（<span>※</span>）:</th>
                    <td><input type = "text" name = "joined_year" value = "{{$form->joined_year}}" readonly></td>
                <tr>
                <tr>
                    <th>経歴（<span>※</span>）:</th>
                    <td>
                        <input type="radio" name = "new_glad_flg" value="0"  @if($form->new_glad_flg == 0) checked @endif disabled>新卒
                        <input type="radio" name = "new_glad_flg" value="1" @if($form->new_glad_flg == 1) checked @endif disabled>中途
                    </td>
                <tr>
                <tr>
                    <th>案件概要/業務内容（<span>※</span>）:</th>
                    <td><input type = "text" name = "project_type" value = "{{$form->project_type}}" readonly></td>
                <tr>
            </table>
            <input type = "submit" value = "削除" class = "menu">
        </form>

        <form action = "/information" method="POST">
            @csrf
            <input type = "submit" value = "戻る" class = "return">
        </form>
    </div>
@endsection
