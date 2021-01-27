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
                    <input type="text" name="id_rw" value="{{$kasus2->rw}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Positif</label>
                    <input type="text" name="positif" value="{{$kasus2->positif}}" class="form-control" readonly>                
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="sembuh" value="{{$kasus2->sembuh}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="meninggal" value="{{$kasus2->meninggal}}" class="form-control" readonly>
                </div>
                <a href="{{url()->previous()}}"class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



