<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataPopExport;
use App\Imports\DataPopImport;
use App\Models\DataPop;

class DataPopController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $datapop = DataPop::get();
  
        return view('datapop', compact('datapop'));
    }
          
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new DataPopExport, 'datapop.xlsx');
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
  
        Excel::import(new DataPopImport, $request->file('file'));
                 
        return back()->with('success', 'Data POP imported successfully.');
    }
}
