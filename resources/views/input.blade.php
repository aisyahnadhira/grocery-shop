@extends('layout.master')
@section('title', 'Input Items')

@section('content')
    <div class="container">
        <h1 class="judul" style="margin-top: 20px; margin-left: -40px">Add Items</h1>
        <br>

        <form action="{{ route('insert') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="jenis">Jenis:</label>
                <select class="form-control" id="jenis" name="jenis">
                  <option value="food">Food</option>
                  <option value="drink">Drink</option>
                  <option value="laundry">Laundry</option>
                  <option value="homecare">Home Care</option>
                  <option value="stationary">Stationary</option>
                </select>
              </div>

            <div class="form-group">
                <label for="stok">Stok:</label>
                <input type="number" class="form-control" id="stok" name="stok">
            </div>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
        <br>
    </div>
@endsection
