<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AlamatPopExport;
use App\Imports\AlamatPopImport;
use App\Models\AlamatPop;

class AlamatPopController extends Controller
{
     /**
    * @return \Illuminate\Support\Collection
    */
    public function index()
    {
        $alamatpop = AlamatPop::get();
  
        return view('alamatpop', compact('alamatpop'));
    }
          
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new AlamatPopExport, 'alamatpop.xlsx');
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
  
        Excel::import(new AlamatPopImport, $request->file('file'));
                 
        return back()->with('success', 'Alamat POP imported successfully.');
    }
}
