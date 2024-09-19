<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataProjekExport;
use App\Imports\DataProjekImport;
use App\Models\DataProjek;

class DataProjekController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $dataprojek = DataProjek::get();
  
        return view('dataprojek', compact('dataprojek'));
    }
          
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new DataProjekExport, 'dataprojek.xlsx');
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
        
        Excel::import(new DataProjekImport, $request->file('file'));
                 
        return back()->with('success', 'Data Projek imported successfully.');
    }
}
