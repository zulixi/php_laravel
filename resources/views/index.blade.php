@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    <table>
        <form action="hello" method="post">
            {{ csrf_field() }}
            <tr>
                @if ($errors->has('name'))
                    <tr>
                        <th>ERROR</th>
                        <td>{{$errors->first('name')}}</td>
                    </tr>
                @endif
                <th>name:</th>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>
            <tr>
                @if ($errors->has('mail'))
                <tr>
                    <th>ERROR</th>
                    <td>{{$errors->first('mail')}}</td>
                </tr>
                @endif
                <th>mail:</th>
                <td><input type="text" name="mail" value="{{old('mail')}}"></td>
            </tr>
            <tr>
                @if($errors->has('age'))
                <tr>
                    <th>ERROR</th>
                    <td>{{$errors->first('age')}}</td>
                </tr>
                @endif
                <th>age:</th>
                <td><input type="text" name="age" value="{{old('age')}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2019 kei.
@endsection

