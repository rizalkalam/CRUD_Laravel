@extends('layouts.main')
@section('content')
    {{-- <h1>{{ $book['nama'] }}</h1> --}}
    <form>
        <div class="mb-3">
          <label >Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $book['nama'] }}" readonly>
        </div>
        <div class="mb-3">
            <label >Pengarang</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book['publisher'] }}" readonly>
          </div>
          <div class="mb-3">
            <label >Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $book['harga'] }}" readonly>
          </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </form>
@endsection