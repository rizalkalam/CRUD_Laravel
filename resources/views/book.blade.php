
@extends('layouts.main')
@section('content')
<div class="container">
    <h3 class="text-center mt-3">Data</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">pengarang</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                              <tr>
                                <td>{{ $book['id'] }}</td>
                                <td>{{ $book['nama'] }}</td>
                                <td >{{ $book['publisher'] }}</td>
                                <td >{{ $book['harga'] }}</td>
                                <td>
                                    <a type="button" class="btn btn-primary"  href="detail_book/{{ $book['id'] }}" >Detail</a>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
</div>

    
@endsection