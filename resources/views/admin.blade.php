@extends('layout.master')
@section('title', 'Admin')
@section('admin', 'active')

@section('content')
<div class="container">
    <h1 class="judul" style="margin-top: 20px; margin-left: -40px">Admin Page</h1>
    <br>

    <div class="d-flex justify-content-between align-items-center">
        <a href="/input" class="btn btn-primary">Add Items</a>

        <form class="form-inline" action="/search" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="search" name="search">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jenis</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->nama}}</td>
                <td>Rp. {{$product->harga}}</td>
                <td>{{$product->jenis}}</td>
                <td>{{$product->stok}}</td>
                <td>
                    <form action="{{ route('update', $product->id_produk) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" value="{{ $product->nama }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="harga" value="{{ $product->harga }}">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="food" @if($product->jenis == 'food') selected @endif>Food</option>
                                <option value="drink" @if($product->jenis == 'drink') selected @endif>Drink</option>
                                <option value="laundry" @if($product->jenis == 'laundry') selected @endif>Laundry</option>
                                <option value="homecare" @if($product->jenis == 'homecare') selected @endif>Home Care</option>
                                <option value="stationary" @if($product->jenis == 'stationary') selected @endif>Stationary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="stok" value="{{ $product->stok }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                    <form action="/delete/{{$product->id_produk}}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="margin-top: 10px">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
