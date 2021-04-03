@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data Kecamatan') }}</div>

                    <div class="card-body">
                        <form action="{{ route('kecamatan.show', $kecamatan->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" value="{{ $kecamatan->kecamatan }}" class="form-control"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kota</label>
                                <input type="text" name="id_kota" value="{{ $kecamatan->kota->kota }}" class="form-control"
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
