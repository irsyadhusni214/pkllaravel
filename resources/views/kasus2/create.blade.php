@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kasus') }}</div>
                <div class="card-body">
                <form action="{{route('kasus2.store')}}" method="POST">
                @csrf
                <div class="col">
                    <livewire:dropdowns />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Positif</label>
                    <input type="text" name="positif" class="form-control" id="" aria-describedby="emailHelp"> 
                    @if($errors->has('positif'))
                    <span class="text-danger">{{ $errors->first('positif') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="sembuh" class="form-control" id="">
                    @if($errors->has('sembuh'))
                    <span class="text-danger">{{ $errors->first('sembuh') }}</span>
                    @endif 
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="meninggal" class="form-control" id="">
                    @if($errors->has('meninggal'))
                    <span class="text-danger">{{ $errors->first('meninggal') }}</span>
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



