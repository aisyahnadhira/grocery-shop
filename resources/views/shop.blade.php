@extends('layout.master')
@section('title','Shop')
@section('shop','active')

@section('content')
    <div class="image">
        <img src="https://images.unsplash.com/photo-1621939514649-280e2ee25f60?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c25hY2t8ZW58MHx8MHx8fDA%3D&auto=format&q=60" alt="">
    </div>

    <br>
    {{-- <h1 class="judul">Our Products</h1> --}}
    <div class="category-grid">
        <div class="category-box">
          <img src="img/flour.png" alt="Food Logo">
          <span class="category-name">Food</span>
        </div>
        <div class="category-box">
          <img src="img/soft-drink.png" alt="Drink Logo">
          <span class="category-name">Drink</span>
        </div>
        <div class="category-box">
          <img src="img/soap.png" alt="Soap Logo">
          <span class="category-name">Body Care</span>
        </div>
        <div class="category-box">
          <img src="img/laundry-detergent.png" alt="Laundry Logo">
          <span class="category-name">Laundry</span>
        </div>
        <div class="category-box">
          <img src="img/cleaning.png" alt="Home Care Logo">
          <span class="category-name">Home Care</span>
        </div>
        <div class="category-box">
            <img src="img/stationary.png" alt="Stationary Logo">
            <span class="category-name">Stationary</span>
          </div>
      </div>


    <br>

    <div class="container">
        <div class="row justify-content-center text-center">
            @forelse($products as $tugas)
                <div class="col-md-4">
                    <div class="card list-card mt-2 mb-4 mx-3">
                        <div style="height: 250px; overflow: hidden;">
                            <img class="card-img-top" src="{{$tugas->image}}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="card-body text-dark-xl" style="font-size: 20px">
                            {{$tugas->nama}} <br>
                            Rp. {{$tugas->harga}}/Kg<br>
                            Stok: {{$tugas->stok}} Kg<br>
                            <div class="icons">
                                <button class="minus-button">-</button>
                                  <span class="cart-counter">0</span>
                                </a>
                                <button class="plus-button">+</button>
                              </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-dark d-inline-block">Tidak ada data ...</div>
            @endforelse
        </div>
    </div>

@endsection
