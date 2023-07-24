@extends('admin-panels.layout')

@section('content')
    <section class="tablebase">
        <div class="text" style="margin-top: 0px;">
            Form List Paket
        </div>
        <div class="card">
            <div class="card-body">

                {{-- ORIGIN ELEMENT --}}
                <form method="post" action="/admin/listpaket">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_paket" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" id="nama_paket"
                            value="{{ Session::get('nama_paket') }}"
                            oninvalid="this.setCustomValidity('Harap isi bagian ini')" onchange="this.setCustomValidity('')"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail</label>
                        <textarea class="form-control" name="detail" id="detail" oninvalid="this.setCustomValidity('Harap isi bagian ini')"
                            onchange="this.setCustomValidity('')">{{ Session::get('detail') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Paket</label>
                        <input type="text" onkeypress="return onlyNumberKey(event)" class="form-control" name="harga"
                            id="harga" value="{{ Session::get('harga') }}">
                    </div>

                    <div class="mb-3">
                        <label for="minimal_p" class="form-label">Minimal Pengunjung</label>
                        <input type="text" onkeypress="return onlyNumberKey(event)" name="minimal_p" class="form-control"
                            id="minimal_P" value="{{ Session::get('minimal_p') }}"
                            oninvalid="this.setCustomValidity('Harap isi bagian ini')" onchange="this.setCustomValidity('')"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="id_kategori" class="form-label">Kategori</label>
                        <select name="id_kategori" class="form-control" id="id_kategori"
                            value="{{ Session::get('id_kategori') }}">
                            <option value="1">Edukasi</option>
                            <option value="2">Tracking</option>
                        </select>
                    </div>

                    <div>
                        <label for="status" class="form-label">Status</label>
                        <input type="checkbox" checked="checked" value="1" name="status" id="status">
                        <!-- <input type="hidden" value="0" name="status" id="status"> -->
                    </div>

                    @include('utility/pesan/pesan_error')

                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                {{-- ORIGIN ELEMENT --}}

            </div>
        </div>

        <script defer src="{{ url('./assets/js/num_only.js') }}"></script>

    </section>
    
@endsection
