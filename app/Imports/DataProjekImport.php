<?php
  
namespace App\Imports;
  
use App\Models\DataProjek;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;
  
class DataProjekImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataProjek([
            'data_pop_id'    => $row['data_pop_id'],
            'projek'         => $row['projek'], 
            'mitra_projek'   => $row['mitra_projek'],
            'no_kontak'      => $row['no_kontak'],
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
            'data_pop_id'    => 'required',
            'projek'         => 'required', 
            'mitra_projek'   => 'required',
            'no_kontak'      => 'required',
        ];
    }
}
