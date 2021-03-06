@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Data Kecamatan') }}</div>

                    <div class="card-body">
                        <form action="{{ route('kecamatan.update', $kecamatan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Kecamatan</label>
                                <input type="text" name="kecamatan" value="{{ $kecamatan->kecamatan }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kota</label>
                                <select name="id_kota" class="form-control" required>
                                    @foreach ($kota as $data)
                                        <option value="{{ $data->id }}">{{ $data->kota }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
