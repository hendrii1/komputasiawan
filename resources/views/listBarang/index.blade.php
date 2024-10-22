@extends('layouts.app')

@section('content')
    <div class="container page-index pt-3">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">List Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn bg-light" href="{{ route('barangs.create') }}">Tambah Barang</a>
            </div>
        </div>
        <table class="table mt-2">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider border-light">
                @foreach ($dt_barang as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        {{-- <td>{{ $barang->harga_barang }}</td> --}}
                        <td>Rp. {{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                        <td>{{ $barang->satuan->kode_satuan }}</td>
                        <td>{{ $barang->deskripsi_barang }}</td>

                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('barangs.show', $barang->id) }}">Detail</a>
                            <a class="btn btn-sm btn-warning" href="{{ route('barangs.edit', $barang->id) }}">Edit</a>

                            <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Hapus Barang?')">
                                @csrf

                                @method('DELETE')
                                <button class="btn btn-sm btn-danger m-0 border-0">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>



@endsection
