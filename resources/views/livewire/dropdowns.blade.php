<div>
    <div class ="m-auto">
        <div class="mb-8">
            <label class="inline-block w-32 font-bold mr-5">Provinsi : </label>
            <select name="provinsi" wire:model="lprovinsi" class="border shadow p-2 bg-white form-group">
                <option value='' >-Provinsi-</option>
                @foreach($provinsi as $data)
                    <option value={{ $data->id }}>{{ $data->provinsi }}</option>
                @endforeach
            </select>
        </div>
        @if(!is_null($lprovinsi))
            <div class="mb-8">
                <label class="inline-block w-32 font-bold mr-5">Kota :</label>
                <select name="kota" wire:model="lkota" 
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow alpearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline form-group"
                    >
                    <option value='' >-Kota-</option>
                    @foreach($kota as $item)
                        <option value={{ $item->id }} <?= (!is_null($lprovinsi) && $item->kode_provinsi == $lprovinsi)? 'selected' : '';?>>{{ $item->kota }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(!is_null($lkota))
            <div class="mb-8">
                <label class="inline-block w-32 font-bold mr-5">Kecamatan :</label>
                <select name="kecamatan" wire:model="lkecamatan" 
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline form-group"
                    >
                    <option value=''>-Kecamatan-</option>
                    @foreach($kecamatan as $kec)
                        <option value={{ $kec->id }} <?= (!is_null($lkota) && $kec->id_kota == $lkota)? 'selected' : '';?>>{{ $kec->kecamatan }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(!is_null($lkecamatan))

            <div class="mb-8">
                <label class="inline-block w-32 font-bold mr-5">Kelurahan :</label>
                <select name="kelurahan" wire:model="lkelurahan" 
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline form-group"
                    >
                    <option value=''>-Kelurahan-</option>
                    @foreach($kelurahan as $kel)
                        <option value={{ $kel->id }} <?= (!is_null($lkecamatan) && $kel->id_kec == $lkecamatan)? 'selected' : '';?>>{{ $kel->kelurahan }}</option>
                    @endforeach
                </select>
            </div>
        @endif
        @if(!is_null($lkelurahan))

            <div class="mb-8">
                <label class="inline-block w-32 font-bold mr-5">rw :</label>
                <select name="id_rw" wire:model="lrw" 
                    class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline form-group"
                    >
                    <option value=''>-RW-</option>
                    @foreach($rw as $r)
                        <option value={{ $r->id }} <?= (!is_null($lkelurahan) && $r->id_kel == $lkelurahan)? 'selected' : '';?>>{{ $r->rw }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>
</div>