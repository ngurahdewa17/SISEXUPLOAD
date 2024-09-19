<?php
  
namespace App\Exports;
    
use App\Models\AlamatPop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class AlamatPopExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AlamatPop::select("data_pop_id","nama_pop", "provinsi", "kabupaten","alamat","titik_koordinat","latitude","longitude")->get();
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Data POP ID","Nama POP", "Provinsi", "Kabupaten","Alamat","Titik Koordinat","Latitude","Longitude"];
    }
}
