@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kasus') }}</div>
                <div class="card-body">
                <form action="{{route('kasus2.update', $kasus2->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Rw</label>
                    <select name="rw" class="form-control" required>
                    @foreach($rw as $data)
                    <option value="{{$data->id}}">{{$data->rw}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Positif</label>
                    <input type="text" name="positif" class="form-control" value="{{$kasus2->positif}}" id="" aria-describedby="emailHelp"> 
                    @if($errors->has('positif'))
                    <span class="text-danger">{{ $errors->first('positif') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="sembuh" value="{{$kasus2->sembuh}}" class="form-control" id="">
                    @if($errors->has('sembuh'))
                    <span class="text-danger">{{ $errors->first('sembuh') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="meninggal" value="{{$kasus2->meninggal}}" class="form-control" id="">
                    @if($errors->has('meninggal'))
                    <span class="text-danger">{{ $errors->first('meninggal') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" value="{{$kasus2->tanggal}}" class="form-control" id="">
                    @if($errors->has('tanggal'))
                    <span class="text-danger">{{ $errors->first('tanggal') }}</span>
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



