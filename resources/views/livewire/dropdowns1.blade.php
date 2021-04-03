<div>

    <div class="form-group row">
        <label for="provinsi" class="col-md-4 col-form-label text-md-left">Provinsi</label>
        <div class="col-md-12">
            <select wire:model="selectedProvinsi" class="form-control">
                <option value="" selected>Nama Provinsi</option>
                @foreach ($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- @if (!is_null($selectedProvinsi)) -->
        <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-left">Kota</label>
            <div class="col-md-12">
                <select wire:model="selectedKota" class="form-control" name="id_kota">
                    <option value="" selected>Nama Kota</option>
                    @foreach ($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->kota }}</option> @endforeach
                </select>
            </div>
        </div>
    <!-- @endif -->

    <!-- @if (!is_null($selectedKota)) -->
     <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-left">Kecamatan</label>
            <div class="col-md-12">
                <select wire:model="selectedKecamatan" class="form-control" name="id_kecamatan">
                    <option value="" selected>Nama Kecamatan</option>
                    @foreach ($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->kecamatan }}</option> @endforeach
                </select>
            </div>
        </div>
    <!-- @endif -->

    <!-- @if (!is_null($selectedKecamatan)) -->
    <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-left">Kelurahan</label>
            <div class="col-md-12">
                <select wire:model="selectedKelurahan" class="form-control" name="id_kecamatan">
                    <option value="" selected>Nama Kelurahan</option>
                    @foreach ($kelurahan as $data4)
                        <option value="{{ $data4->id }}">{{ $data4->kelurahan }}</option> @endforeach
                </select>
            </div>
        </div>
    <!-- @endif -->

    <!-- @if (!is_null($selectedKelurahan)) -->
    <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-left">Rw</label>
            <div class="col-md-12">
                <select wire:model="selectedRw" class="form-control" name="id_rw">
                    <option value="" selected>Rukun Warga</option>
                    @foreach ($rw as $data5)
                        <option value="{{ $data5->id }}">{{ $data5->rw }}</option> @endforeach
                </select>
            </div>
        </div>
    <!-- @endif -->
</div>
