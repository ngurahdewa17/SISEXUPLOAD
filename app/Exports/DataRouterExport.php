<?php
  
namespace App\Exports;
    
use App\Models\DataRouter;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class DataPowerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataRouter::select("data_pop_id", "tipe_router", "kls_router","nama_router","jml_portoneng","jml_portteng","jml_portseratusg")->get();
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Data POP ID", "Tipe Router", "Kelas Router","Nama Router","Jumlah Port 1 G","Jumlah Port 10 G","Jumlah Port 100 G"];
    }
}
