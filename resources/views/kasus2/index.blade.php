@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data Kasus') }}
                <a href="{{route('kasus2.create')}}" class="btn btn-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                        <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Rw</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Sembuh</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @php $no = 1; @endphp
                    @foreach($kasus2 as $data)
                    <tbody>
                        <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>
                        Provinsi: {{$data->Rw->kelurahan->kecamatan->kota->provinsi->provinsi}} <br>
                        Kota: {{$data->Rw->kelurahan->kecamatan->kota->kota}} <br>
                        Kecamatan: {{$data->Rw->kelurahan->kecamatan->kecamatan}} <br>
                        Kelurahan: {{$data->Rw->kelurahan->kelurahan}} <br>
                        </td>
                        <td>{{$data->Rw->rw}}</td>
                        <td>{{$data->positif}}</td>
                        <td>{{$data->sembuh}}</td>
                        <td>{{$data->meninggal}}</td>
                        <td>{{$data->tanggal}}</td>
                        <td>                           
                            <form action="{{route('kasus2.destroy',$data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('kasus2.show',$data->id)}}"class ="btn btn-warning">Lihat</a> |
                            <a href="{{route('kasus2.edit',$data->id)}}"class ="btn btn-primary">Ubah</a> |
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



