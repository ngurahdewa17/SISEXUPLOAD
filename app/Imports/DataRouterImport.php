<?php
  
namespace App\Imports;
  
use App\Models\DataRouter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Hash;
  
class DataRouterImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataRouter([
            'data_pop_id'     => $row['data_pop_id'],
            'tipe_router'     => $row['tipe_router'], 
            'kls_router'      => $row['kls_router'],
            'nama_router'     => $row['nama_router'],
            'jml_portoneg'    => $row['jml_portoneg'],
            'jml_portteng'    => $row['jml_portteng'],
            'jml_portseratusg'=> $row['jml_portseratusg'],
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
            'data_pop_id'      => 'required',
            'tipe_router'      => 'required', 
            'kls_router'       => 'required',
            'nama_router'      => 'required',
            'jml_portoneg'     => 'required',
            'jml_portteng'     => 'required',
            'jml_portseratusg' => 'required',
        ];
    }
}
