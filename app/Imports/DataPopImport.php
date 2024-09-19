<?php
  
namespace App\Imports;
  
use App\Models\DataPop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;
  
class DataPopImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataPop([
            'kode_pop'    => $row['kode_pop'],
            'nama_pop'    => $row['nama_pop'], 
            'status'      => $row['status'],
            'kategori'    => $row['kategori'],
            'type'        => $row['type'],
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
            'kode_pop' => 'required',
            'nama_pop' => 'required',
            'status' => 'required',
            'kategori' => 'required',
            'type' => 'required',
        ];
    }
}
