<?php
namespace App\Http\Livewire;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Rw;
use Livewire\Component;
class Dropdowns extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $idrw;

    public $lprovinsi = NULL;
    public $lkota = NULL;
    public $lkecamatan = NULL;
    public $lkelurahan = NULL;
    public $lrw = NULL;

    public $selectedState = NULL;

    public function mount($idrw = NULL)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();

        if(!is_null($idrw)){
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($idrw);

            if($idrw){
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kecamatan->id_kota)->get();
                $this->kota = Kota::where('kode_provinsi', $rw->kota->kode_provinsi)->get();

                $this->lprovinsi = $rw->kelurahan->kecamatan->kota->kode_provinsi;
                $this->lkota = $rw->kelurahan->kecamatan->id_kota;
                $this->lkecamatan = $rw->kelurahan->id_kecamatan;
                $this->lkelurahan = $rw->id_kelurahan;
                $this->lrw = $rw->id_rw;
            }
        }
    }

    public function render()
    {
        return view('livewire.dropdowns');
    }

    public function updatedlprovinsi($provinsi)
    {
        $this->kota = Kota::where('kode_provinsi', $provinsi)->get();
        $this->lkota = NULL;
        $this->lkecamatan = NULL;
        $this->lkelurahan = NULL;
        $this->lrw = NULL;
    }
    public function updatedlkota($kota)
    {
        $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        $this->lkecamatan = NULL;
        $this->lkelurahan = NULL;
        $this->lrw = NULL;
    }
    public function updatedlkecamatan($kecamatan)
    {
        $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        $this->lkelurahan = NULL;
        $this->lrw = NULL;
    }
    public function updatedlkelurahan($kelurahan)
    {
        $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        $this->lrw = NULL;
    }

}