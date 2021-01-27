@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kota') }}</div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                <form action="{{route('kota.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Kode Kota</label>
                    <input type="text" name="kode_kota" class="form-control" id="" aria-describedby="emailHelp">                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kota</label>
                    <input type="text" name="kota" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Provinsi</label>
                    <select name="id_provinsi" class="form-control">
                    @foreach($provinsi as $data)
                    <option value="{{$data->id}}">{{$data->provinsi}}</option>
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



