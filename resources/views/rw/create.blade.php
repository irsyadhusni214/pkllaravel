@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data') }}</div>

                <div class="card-body">
                <form action="{{route('rw.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Rw</label>
                    <input type="text" name="rw" class="form-control" id="">
                    @if($errors->has('rw'))
                    <span class="text-danger">{{ $errors->first('rw') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="">
                    @if($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelurahan</label>
                    <select name="id_kelurahan" class="form-control">
                    @foreach($kelurahan as $data)
                    <option value="{{$data->id}}">{{$data->kelurahan}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('id_kelurahan'))
                    <span class="text-danger">{{ $errors->first('id_kelurahan') }}</span>
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



