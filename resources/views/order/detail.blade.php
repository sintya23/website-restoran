@extends('layouts.app')

@section('title', ' Order')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">
            @foreach ($order as $row)
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->pemesanan->pelanggan }}</h5>
                        <p class="card-text">Status : {{ $row->pemesanan->status }}</p>
                        <p class="card-text">Total Bayar : Rp. {{ $row->total_bayar }}</p>
                        <form>
                            @foreach ($menu as $item)
                            @if ($item->pemesanan_id == $row->pemesanan_id)
                            @if ($item->jumlah > 0)
                            <ul class="list-group">
                                <li class="list-group-item my-2">
                                    <label>Menu : {{ $item->nama }}</label>
                                    <input type="text" class="form-control" value="Jumlah: {{ $item->jumlah }}"
                                        readonly>
                                </li>
                            </ul>
                            @endif
                            @endif
                            @endforeach
                            <a href="{{ route('konfirmasi_order', $row->pemesanan->id )}}"
                                class="btn btn-success mt-3">Konfirmasi Pembayaran</a>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection