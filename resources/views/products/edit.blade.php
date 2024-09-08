@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')
<div class="container mt-4">
    <h2>Edit Produk</h2>
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama Produk -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        <!-- Deskripsi Produk -->
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Produk</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>

        <!-- Harga Produk -->
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required step="0.01">
        </div>

        <!-- Jenis Ikan -->
        <div class="mb-3">
            <label for="jenis_ikan" class="form-label">Jenis Ikan</label>
            <select class="form-select" id="jenis_ikan" name="jenis_ikan" required>
                <option value="udang" {{ $product->jenis_ikan == 'udang' ? 'selected' : '' }}>Udang</option>
                <option value="kepiting" {{ $product->jenis_ikan == 'kepiting' ? 'selected' : '' }}>Kepiting</option>
                <option value="ikan laut" {{ $product->jenis_ikan == 'ikan laut' ? 'selected' : '' }}>Ikan Laut</option>
                <option value="ikan sungai" {{ $product->jenis_ikan == 'ikan sungai' ? 'selected' : '' }}>Ikan Sungai</option>
                <option value="kerang" {{ $product->jenis_ikan == 'kerang' ? 'selected' : '' }}>Kerang</option>
                <option value="kerapu" {{ $product->jenis_ikan == 'kerapu' ? 'selected' : '' }}>Kerapu</option>
            </select>
        </div>

        <!-- Gambar Produk -->
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Produk</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Gambar Produk" class="img-thumbnail mt-2" width="150">
            @else
                <p>Tidak ada gambar.</p>
            @endif
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Update Produk</button>
    </form>
</div>
@endsection
