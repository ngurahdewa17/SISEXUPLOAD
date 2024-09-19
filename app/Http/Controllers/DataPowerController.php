<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataPowerExport;
use App\Imports\DataPowerImport;
use App\Models\DataPower;

class DataPowerController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $datapower = DataPower::get();
  
        return view('datapower', compact('datapower'));
    }
          
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new DataPowerExport, 'datapower.xlsx');
    }
         
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        // Validate incoming request data
        $request->validate([
            'file' => 'required|max:2048',
        ]);
  
        Excel::import(new DataPowerImport, $request->file('file'));
                 
        return back()->with('success', 'Data Power imported successfully.');
    }
}
