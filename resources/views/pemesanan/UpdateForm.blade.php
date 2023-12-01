@extends('layouts.app')

@section('title', 'Pemesanan')

@section('contents')
<form action="{{ route('pemesanan.edit.store', ['id' => $pemesanan->id]) }}" method="post" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" value="{{$pemesanan->pelanggan}}" id="pelanggan" name="pelanggan">
                </div>
                <div class="form-group">
                    <label for="status">Meja</label>
                    <select class="form-control" id="status" name="meja">
                        <option value="{{$pemesanan->meja}}">Meja {{$pemesanan->meja}}</option>
                        <option value="1">Meja 1</option>
                        <option value="2">Meja 2</option>
                        <option value="3">Meja 3</option>
                        <option value="4">Meja 4</option>
                    </select>
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