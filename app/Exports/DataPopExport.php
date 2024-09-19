<?php
  
namespace App\Exports;
    
use App\Models\DataPop;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class DataPopExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPop::select("id", "kode_pop", "nama_pop","status","kategori","type")->get();
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["ID", "Kode POP", "Nama POP","Status","Kategori","Type"];
    }
}
