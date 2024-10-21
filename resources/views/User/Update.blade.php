@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}"
@endpush

@section('title', '社員情報')

@section('menubar')
    @parent
    社員情報更新
@endsection


@section('content')
    <div class = "block">
        <form action = "/updateResult" method = "POST">
            @csrf
            <h3>社員情報</h3>
            <p>（<span>※</span>）がついている項目は入力必須項目です。</p>
            <table>
                <input type = "hidden" name = "id" value = "{{$form->id}}">
                <tr>
                    <th>社員コード（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "staff_code" value = "{{$form->staff_code}}">
                        @if ($errors->has('staff_code'))
                            <span class="text-danger">{{ $errors->first('staff_code') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>姓（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "last_name" value = "{{$form->last_name}}">
                        @if ($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>名（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "first_name" value = "{{$form->first_name}}">
                        @if ($errors->has('first_name'))
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>姓ローマ字（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "last_name_romaji" value = "{{$form->last_name_romaji}}">
                        @if ($errors->has('last_name_romaji'))
                            <span class="text-danger">{{ $errors->first('last_name_romaji') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>名ローマ字（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "first_name_romaji" value = "{{$form->first_name_romaji}}">
                        @if ($errors->has('first_name_romaji'))
                            <span class="text-danger">{{ $errors->first('first_name_romaji') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>所属（<span>※</span>）:</th>
                    <td><select name = "staff_department">
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
                        @if ($errors->has('staff_department'))
                            <span class="text-danger">{{ $errors->first('staff_department') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>入社年月日（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "joined_year" value = "{{$form->joined_year}}">
                        @if ($errors->has('joined_year'))
                            <span class="text-danger">{{ $errors->first('joined_year') }}</span>
                        @endif
                    </td>
                <tr>
                <tr>
                    <th>経歴（<span>※</span>）:</th>
                    <td>
                        <input type="radio" name = "new_glad_flg" value="0"  @if($form->new_glad_flg == 0) checked @endif>新卒
                        <input type="radio" name = "new_glad_flg" value="1" @if($form->new_glad_flg == 1) checked @endif>中途
                    </td>
                <tr>
                <tr>
                    <th>案件概要/業務内容:</th>
                    <td>
                        <input type = "text" name = "project_type" value = "{{$form->project_type}}">
                        @if ($errors->has('project_type'))
                            <span class="text-danger">{{ $errors->first('project_type') }}</span>
                        @endif
                    </td>
                <tr>
            </table>
            <input type = "submit" value = "更新" class = "menu">
        </form>

        {{-- 社員情報へ戻る --}}
        <form action = "/information" method="POST">
            @csrf
            <input type = "submit" value = "戻る" class = "return">
        </form>
    </div>
@endsection
