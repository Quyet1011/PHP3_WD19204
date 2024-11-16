@extends('layout')

@section('title', $book->title)

@section('content')
    <h3>Tên sách: {{ $book->title }}</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Thông tin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Tác giả</th>
                <td>{{ $book->author }}</td>
            </tr>
            <tr>
                <th scope="row">Nhà xuất bản</th>
                <td>{{ $book->publisher }}</td>
            </tr>
            <tr>
                <th scope="row">Ngày xuất bản</th>
                <td>{{ date('d/m/Y', strtotime($book->publication)) }}</td>
            </tr>            
            <tr>
                <th scope="row">Giá</th>
                <td>{{ number_format($book->price, 0, ',', '.') }} VND</td>
            </tr>
            <tr>
                <th scope="row">Số lượng</th>
                <td>{{ $book->quantity }}</td>
            </tr>
            <tr>
                <th scope="row">Danh mục</th>
                <td>{{ $book->category_name }}</td>
            </tr>
            <tr>
                <th scope="row">Ảnh mô tả</th>
                <td><img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" width="200"></td>
            </tr>
        </tbody>
    </table>
@endsection
