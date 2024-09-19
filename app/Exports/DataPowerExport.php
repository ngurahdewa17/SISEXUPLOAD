<?php
  
namespace App\Exports;
    
use App\Models\DataPower;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
    
class DataPowerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPower::select("data_pop_id", "panel_kwh", "id_pelanggan")->get();
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return ["Data POP ID", "Panel KWH", "ID Pelanggan"];
    }
}
