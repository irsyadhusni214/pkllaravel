@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data kasus2') }}</div>

                <div class="card-body">
                <form action="{{route('kasus2.update', $kasus2->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Rw</label>
                    <select name="id_rw" class="form-control" required>
                    @foreach($rw as $data)
                    <option value="{{$data->id}}">{{$data->rw}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Positif</label>
                    <input type="text" name="kode_kasus2" value="{{$kasus2->positif}}" class="form-control">                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="kasus2" value="{{$kasus2->sembuh}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="kasus2" value="{{$kasus2->meninggal}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



