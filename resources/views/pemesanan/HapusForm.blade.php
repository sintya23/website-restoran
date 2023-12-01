@extends('layouts.app')

@section('title', 'Pemesanan')

@section('contents')
<form action="{{ route('pemesanan.edit.name', ['id' => $pesan->id]) }} " method="post">
@csrf
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type="date" class="form-control" id="waktu" name="waktu">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="status_dipesan" name="status" value="Dipesan">
                        <label class="form-check-label" for="status_dipesan">Dipesan</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="status_diproses" name="status" value="Diproses">
                        <label class="form-check-label" for="status_diproses">Diproses</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="status_selesai" name="status" value="Selesai">
                        <label class="form-check-label" for="status_selesai">Selesai</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Pelanggan</label>
                    <input type="text" class="form-control" id="pelanggan" name="pelanggan">
                </div>
                <div class="form-group">
                    <label for="meja">Meja</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="meja" name="meja" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pilih Meja
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" data-value="1">Meja 1</a>
                                <a class="dropdown-item" href="#" data-value="2">Meja 2</a>
                                <a class="dropdown-item" href="#" data-value="3">Meja 3</a>
                                <a class="dropdown-item" href="#" data-value="4">Meja 4</a>
                                <!-- Tambahkan opsi lain sesuai dengan nomor meja yang tersedia -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection