<?php
  
namespace App\Imports;
  
use App\Models\AlamatPop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;
  
class AlamatPopImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AlamatPop([
            'data_pop_id'       => $row['data_pop_id'],
            'nama_pop'          => $row['nama_pop'],
            'provinsi'          => $row['provinsi'], 
            'kabupaten'         => $row['kabupaten'],
            'alamat'            => $row['alamat'],
            'titik_koordinat'   => $row['titik_koordinat'],
            'latitude'          => $row['latitude'],
            'longitude'         => $row['longitude'],
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
            'nama_pop'          => 'required',
            'provinsi'          => 'required', 
            'kabupaten'         => 'required',
            'alamat'            => 'required',
            'titik_koordinat'   => 'required',
            'latitude'          => 'required',
            'longitude'         => 'required',
        ];
    }
}
