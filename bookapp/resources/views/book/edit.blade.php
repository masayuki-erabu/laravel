@extends('layouts.bookapp')

@section('title', '本の編集')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $eroor)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/book/add" method="post">
    <table>
        @csrf
        {{-- <input type="hidden" name="id" value="{{$form->id}}"> --}}
        {{-- <tr><th>本のID番号: </th><td><input type="number" name="id"></td></tr> --}}
        {{-- <tr><th>本のタイトル: </th><td><input type="text" name="title" value="{{$form->name}}"></td></tr> --}}
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2023 erabu.
@endsection