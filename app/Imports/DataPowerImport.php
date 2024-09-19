<?php
  
namespace App\Imports;
  
use App\Models\DataPower;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;
  
class DataPowerImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataPower([
            'data_pop_id'       => $row['data_pop_id'],
            'panel_kwh'         => $row['panel_kwh'], 
            'id_pelanggan'      => $row['id_pelanggan'],
        ]);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function rules(): array
    {
        return [
            'data_pop_id'       => 'required',
            'panel_kwh'         => 'required', 
            'id_pelanggan'      => 'required',
        ];
    }
}
