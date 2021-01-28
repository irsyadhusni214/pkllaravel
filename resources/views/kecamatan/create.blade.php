@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kecamatan') }}</div>

                <div class="card-body">
                <form action="{{route('kecamatan.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kecamatan</label>
                    <input type="text" name="kode_kecamatan" class="form-control" id="" aria-describedby="emailHelp"> 
                    @if($errors->has('kode_kecamatan'))
                    <span class="text-danger">{{ $errors->first('kode_kecamatan') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="">
                    @if($errors->has('kecamatan'))
                    <span class="text-danger">{{ $errors->first('kecamatan') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <select name="id_kota" class="form-control">
                    @foreach($kota as $data)
                    <option value="{{$data->id}}">{{$data->kota}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('id_kota'))
                    <span class="text-danger">{{ $errors->first('id_kota') }}</span>
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



