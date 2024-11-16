@extends('layout')

@section('title', 'Danh sách sách theo loại')

@section('content')
    <h2>Sách theo loại</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $index => $book)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ number_format($book->price, 0, ',', '.') }} VND</td>
                    <td>{{ $book->category_name }}</td>
                    <td><a href="{{ route('detail', $book->id) }}" class="btn btn-success">Xem chi tiết</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        {{ $books->links('pagination::bootstrap-5') }}
    </nav>
@endsection
