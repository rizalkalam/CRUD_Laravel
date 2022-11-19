@extends('layouts.main')
@section('content')

    <di class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mt-3">Tambah data</h3>
                <form method="post" action="/book/add">
                    @csrf
                    <div class="mb-3">
                        <label >Nama</label>
                        <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="mb-3">
                        <label >Pengarang</label>
                        <input type="text" class="form-control" required id="author" name="author" value="{{ old('author') }}">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <select class="form-select" name="publisher_id" id="">
                            @foreach ($publisher as $publish)
                                <option name="publisher_id" value="{{ $publish->id }}">{{ $publish->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" required id="harga" name="harga" value="{{ old('harga') }}">
                    </div>
                    <div class="mb-3">
                        <label for="rilis" class="form-label">Rilis</label>
                        <input type="date" class="form-control" required id="rilis" name="rilis" value="{{ old('rilis') }}">
                    </div>
                <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
        
    

@endsection