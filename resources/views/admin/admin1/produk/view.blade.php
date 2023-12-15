@extends('admin.layout.head')
@section('content-admin')
<title>View Data Barang</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Data Barang <span class="fw-bold">{{ $data->nama_barang }}</span></h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('gambar/' . $data->gambar) }}" width="100%" height="100%"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6 mt-2">
                                <h5 class="fw-bold">Nama: {{ $data->nama_barang }}</h5>
                                <h6>Harga: {{ $data->harga }}</h6>
                                <h6>Kategori: {{ $data->kategori }}</h6>
                                <h6>Kondisi: {{ $data->kondisi }}</h6>
                                <h6>Berat: {{ $data->berat }} {{ $data->masa }}</h6>
                                <h6>Deskripsi: <hr> <br><span>{{ $data->deskripsi }}</span></h6>

                            </div>
                            <div class="d-flex ms-auto w-100 justify-content-end gap-2">
                                <a href="/produk/edit/{{ $data -> id }}" class="btn btn-outline-success mr-2">Edit</a>
                                <a href="{{route('produk')}}" class="btn btn-outline-danger ">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
