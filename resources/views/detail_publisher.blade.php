@extends('layouts.main')
@section('content')
    {{-- <h1>{{ $book['nama'] }}</h1> --}}
    <form>
        <div class="mb-3">
          <label >Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $publisher->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label >Pengarang</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $publisher->email }}" readonly>
          </div>
          <div class="mb-3">
            <label >Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $publisher->alamat }}" readonly>
          </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </form>
@endsection