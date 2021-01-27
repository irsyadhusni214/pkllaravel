@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kasus') }}</div>

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
                <form action="{{route('kasus2.store')}}" method="POST">
                @csrf
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
                    <input type="text" name="positif" class="form-control" id="" aria-describedby="emailHelp" required>                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Sembuh</label>
                    <input type="text" name="sembuh" class="form-control" id="" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Meninggal</label>
                    <input type="text" name="meninggal" class="form-control" id="" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



