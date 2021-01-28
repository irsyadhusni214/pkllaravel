@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kelurahan') }}</div>

                <div class="card-body">
                <form action="{{route('kelurahan.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kelurahan</label>
                    <input type="text" name="kode_kelurahan" class="form-control" id="" aria-describedby="emailHelp">
                    @if($errors->has('kode_kelurahan'))
                    <span class="text-danger">{{ $errors->first('kode_kelurahan') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <input type="text" name="kelurahan" class="form-control" id="">
                    @if($errors->has('kelurahan'))
                    <span class="text-danger">{{ $errors->first('kelurahan') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <select name="id_kecamatan" class="form-control">
                    @foreach($kecamatan as $data)
                    <option value="{{$data->id}}">{{$data->kecamatan}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('id_kecamatan'))
                    <span class="text-danger">{{ $errors->first('id_kecamatan') }}</span>
                    @endif 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



