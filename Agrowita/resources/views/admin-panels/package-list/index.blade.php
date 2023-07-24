@extends('admin-panels.layout')

@section('content')
    <section>
        <div class="text">
            List Paket
        </div>
        <div class="tablebase">
            <a href="listpaket/create" class="btn btn-primary">Buat Paket</a>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama paket</th>
                            <th>Detail</th>
                            <th>Harga</th>
                            <th>Minimal</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->kegiatan }}</td>
                                <td>{{ $item->detail }}</td>
                                <td class="harga">{{ $item->formatRupiah('harga') }}</td>
                                <td>{{ $item->minimal }}</td>
                                <td>{{ $item->foto }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->id_kategori }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

@endsection
