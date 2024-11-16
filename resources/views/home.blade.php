@extends('layout')

@section('content')
    <h2>Sản phẩm có giá cao nhất</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Giá</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach($highestPriceBooks as $index => $book)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ number_format($book->price, 0, ',', '.') }} VND</td>
                    <td><a href="{{ route('detail', $book->id) }}" class="btn btn-success">Xem chi tiết</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Sản phẩm có giá thấp nhất</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Giá</th>
                <th scope="col">Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowestPriceBooks as $index => $book)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ number_format($book->price, 0, ',', '.') }} VND</td>
                    <td><a href="{{ route('detail', $book->id) }}" class="btn btn-success">Xem chi tiết</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
