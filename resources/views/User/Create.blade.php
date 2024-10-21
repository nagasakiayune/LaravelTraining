@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}"
@endpush

@section('title', '社員情報')

@section('menubar')
    @parent
    社員情報
@endsection


@section('content')
    <div class = "block">
        <form action = "/createResult" method = "POST">
            @csrf
            <h3>新規登録</h3>
            <p>（<span>※</span>）がついている項目は入力必須項目です。</p>
            <table>
                <tr>
                    <th>社員コード（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "staff_code" value="{{ old('staff_code') }}"><br>
                        @if ($errors->has('staff_code'))
                            <span class="text-danger">{{ $errors->first('staff_code') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>姓（<span>※</span>）:</th>
                    <td><input type = "text" name = "last_name" value="{{ old('last_name') }}"><br>
                        @if ($errors->has('last_name'))
                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>名（<span>※</span>）:</th>
                    <td><input type = "text" name = "first_name" value="{{ old('first_name') }}"><br>
                        @if ($errors->has('first_name'))
                            <span class="text-danger">{{ $errors->first('first_name') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>姓ローマ字（<span>※</span>）:</th>
                    <td>
                        <input type = "text" name = "last_name_romaji" value="{{ old('last_name_romaji') }}"><br>
                        @if ($errors->has('last_name_romaji'))
                            <span class="text-danger">{{ $errors->first('last_name_romaji') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>名ローマ字（<span>※</span>）:</th>
                    <td><input type = "text" name = "first_name_romaji" value="{{ old('first_name_romaji') }}"><br>
                        @if ($errors->has('first_name_romaji'))
                            <span class="text-danger">{{ $errors->first('first_name_romaji') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>所属（<span>※</span>）:</th>
                    <td><select name = "staff_department">
                        <option value="">--------------</option>
                        <option value="0001">エンジニア</option>
                        <option value="0002">営業</option>
                        <option value="0003">コーポレート</option>
                        </select><br>
                        @if ($errors->has('staff_department'))
                            <span class="text-danger">{{ $errors->first('staff_department') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>入社年月日（<span>※</span>）:</th>
                    <td><input type = "text" name = "joined_year" value="{{ old('joined_year') }}"><br>
                        @if ($errors->has('joined_year'))
                            <span class="text-danger">{{ $errors->first('joined_year') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>経歴（<span>※</span>）:</th>
                    <td>
                        <input type="radio" name = "new_glad_flg" value="0">新卒
                        <input type="radio" name = "new_glad_flg" value="1">中途<br>
                    </td>
                </tr>
                <tr>
                    <th>案件概要/業務内容（<span>※</span>）:</th>
                    <td><input type = "text" name = "project_type" value="{{ old('project_type') }}"><br>
                        @if ($errors->has('project_type'))
                            <span class="text-danger">{{ $errors->first('project_type') }}</span>
                        @endif
                    </td>
                </tr>
            </table>
            <input type = "submit" value = "登録" class = "menu">
        </form>

        <form action = "/information" method="POST">
            @csrf
            <input type = "submit" value = "戻る" class = "return">
        </form>
    </div>
@endsection
