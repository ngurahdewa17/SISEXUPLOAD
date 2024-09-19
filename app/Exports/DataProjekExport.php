<?php
  
namespace App\Exports;
    
use App\Models\DataProjek;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class DataProjekExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataProjek::select("data_pop_id", "projek", "mitra_projek","no_kontak")->get();
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Data POP ID", "Projek", "Mitra Projek","No Kontak"];
    }
}
