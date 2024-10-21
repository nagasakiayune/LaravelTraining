@extends('layouts.template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}"
@endpush

@section('title', '社員一覧')

@section('menubar')
    @parent
    社員一覧
@endsection


@section('content')


    <form action = "/information" method="POST">
        @csrf
        <div class = "menu_title">
            <input type = "submit" value = "管理画面へ" class = "menu">
        </div>
    </form>

    <div class = "index">
        <h3>エンジニア</h3>
        <table>
            <tr>
                <th>No</th>
                <th>姓名</th>
                <th>入社年月日</th>
                <th>経歴</th>
                <th>案件概要</th>
            </tr>
            @foreach ($engineers as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->last_name}}{{$item->first_name}}</td>
                    <td>{{$item->joined_year}}</td>
                    @if ($item->new_glad_flg)
                        <td>中途</td>
                    @else
                        <td>新卒</td>
                    @endif

                    @if ($item->project_type != null)
                        <td>{{$item->project_type}}</td>
                    @else
                        <td>-</td>
                    @endif
                </tr>
            @endforeach
        </table>

        <h3>営業</h3>
        <table>
            <tr>
                    <th>No</th>
                    <th>姓名</th>
                    <th>入社年月日</th>
                    <th>経歴</th>
                    <th>案件概要</th>
                </tr>
                @foreach ($sales as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->last_name}}{{$item->first_name}}</td>
                        <td>{{$item->joined_year}}</td>
                        @if ($item->new_glad_flg)
                            <td>中途</td>
                        @else
                            <td>新卒</td>
                        @endif

                        @if ($item->project_type != null)
                            <td>{{$item->project_type}}</td>
                        @else
                            <td>-</td>
                        @endif
                    </tr>
                @endforeach
            </table>

        <h3>コーポレート</h3>
        <table>
            <tr>
                <th>No</th>
                <th>姓名</th>
                <th>入社年月日</th>
                <th>経歴</th>
                <th>案件概要</th>
            </tr>
            @foreach ($corporate as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->last_name}}{{$item->first_name}}</td>
                    <td>{{$item->joined_year}}</td>
                    @if ($item->new_glad_flg)
                        <td>中途</td>
                    @else
                        <td>新卒</td>
                    @endif

                    @if ($item->project_type != null)
                        <td>{{$item->project_type}}</td>
                    @else
                        <td>-</td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
@endsection


