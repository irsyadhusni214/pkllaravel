@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show Data Kasus') }}</div>

                    <div class="card-body">
                        <form action="{{ route('kasus2.update', $kasus2->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Provinsi</label>
                                <input type="text" name="id_rw"
                                    value="{{ $kasus2->rw->kelurahan->kecamatan->kota->provinsi->provinsi }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kota</label>
                                <input type="text" name="id_rw"
                                    value="{{ $kasus2->rw->kelurahan->kecamatan->kota->kota }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kecamatan</label>
                                <input type="text" name="id_rw" value="{{ $kasus2->rw->kelurahan->kecamatan->kecamatan }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kelurahan</label>
                                <input type="text" name="id_rw" value="{{ $kasus2->rw->kelurahan->kelurahan }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Rw</label>
                                <input type="text" name="id_rw" value="{{ $kasus2->rw->rw }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Positif</label>
                                <input type="text" name="positif" value="{{ $kasus2->positif }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Sembuh</label>
                                <input type="text" name="sembuh" value="{{ $kasus2->sembuh }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Meninggal</label>
                                <input type="text" name="meninggal" value="{{ $kasus2->meninggal }}" class="form-control"
                                    readonly>
                            </div>
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
