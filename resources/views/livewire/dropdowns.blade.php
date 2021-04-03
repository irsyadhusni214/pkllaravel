<div class="body">
    <div class="mb-3">
        <label for="" class="form-label">Provinsi</label>
        <select name="kode_kota" wire:model="lprovinsi" class="form-control" <?= !is_null($cek1) ? 'dissabled' : '' ?> id=""> 
        <option value='' >-Provinsi-</option>
            @foreach ($provinsi as $data)
                <option value={{ $data->id }}>{{ $data->provinsi }}</option>
            @endforeach
        </select>
    </div>
    @if (!is_null($lprovinsi))
    <div class="mb-3">
        <label for="" class="form-label">Kota</label>
        <select name="kota" wire:model="lkota" class="form-control" >
            <option value='' >-Kota-</option>
            @foreach ($kota as $item)
                <option value={{ $item->id }} <?= !is_null($lprovinsi) && $item->kode_provinsi == $lprovinsi ? 'selected' : '' ?>>{{ $item->kota }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!is_null($lkota))
    <div class="mb-3">
        <label for="" class="form-label">Kecamatan</label>
        <select name="kecamatan" wire:model="lkecamatan" class="form-control" >
        <option value=''>-Kecamatan-</option>
            @foreach ($kecamatan as $kec)
                <option value={{ $kec->id }} <?= !is_null($lkota) && $kec->id_kota == $lkota ? 'selected' : '' ?>>{{ $kec->kecamatan }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!is_null($lkecamatan))
    <div class="mb-3">
        <label for="" class="form-label">Kelurahan</label>
        <select name="kelurahan" wire:model="lkelurahan" class="form-control">
        <option value=''>-Kelurahan-</option>
            @foreach ($kelurahan as $kel)
                <option value={{ $kel->id }} <?= !is_null($lkecamatan) && $kel->id_kecamatan == $lkecamatan ? 'selected' : '' ?>>{{ $kel->kelurahan }}</option>
            @endforeach
        </select>
    </div>
    @endif
    @if (!is_null($lkelurahan))
    <div class="mb-3">
        <label for="" class="form-label">Rw</label>
        <select name="id_rw" wire:model="lrw" class="form-control">
        <option value=''>-RW-</option>
            @foreach ($rw as $r)
                <option value={{ $r->id }} <?= !is_null($lkelurahan) && $r->id_kelurahan == $lkelurahan ? 'selected' : '' ?>>{{ $r->rw }}</option>
            @endforeach
        </select>
    </div>
    @endif
</div>
