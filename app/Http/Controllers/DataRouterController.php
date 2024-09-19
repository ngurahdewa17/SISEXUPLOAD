<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataRouterExport;
use App\Imports\DataRouterImport;
use App\Models\DataRouter;

class DataRouterController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $datarouter = DataRouter::get();
  
        return view('datarouter', compact('datarouter'));
    }
          
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new DataRouterExport, 'datarouter.xlsx');
    }
         
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|max:2048',
        ]);
  
        Excel::import(new DataRouterImport, $request->file('file'));
                 
        return back()->with('success', 'Data Router imported successfully.');
    }
}
