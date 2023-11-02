@extends('layouts.bookapp')

@section('title', 'Book-Manager')

{{-- @section('menubar')
    ブック・ページ
@endsection --}}

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2023 erabu.
@endsection