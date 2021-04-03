@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Data kelurahan') }}</div>

                    <div class="card-body">
                        <form action="{{ route('kelurahan.update', $kelurahan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Kelurahan</label>
                                <input type="text" name="kelurahan" value="{{ $kelurahan->kelurahan }}"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kecamatan</label>
                                <select name="id_kecamatan" class="form-control" required>
                                    @foreach ($kecamatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->kecamatan }}</option>
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
