<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Companies;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(){
        if (View::exists('base_layout.base')) {
            return view('companies.index',[
                'companies' => Companies::paginate(15)
            ]);
        }
    }

    public function get($id){
        $company = Companies::find($id);

        if ($company->id == null) {
            return back()->with('error', 'Resource not found');
        }
        
        return view('companies.view', ['company' => $company]);
        
    }

    public function save(Request $request){
        $company = new Companies;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = "defygedh";
        $company->website = $request->website;
        $company->save();
        return back()->with('success','Company Saved Successfully'); 
    }

    public function delete($id){
        $company = Companies::find($id);

        if ($company->id == null) {
            return back()->with('error', 'Resource can not be deleted due to existence of a related resource');
        }
        
        $company->delete();
        return back()->with('success', 'Deleted Successfully');
        
    }

    public function edit(Request $request){

        $id = $request->id;
        $company = Companies::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = "defygedh";
        $company->website = $request->website;
        $company->save();
        return back()->with('success','Company Updated Successfully'); 
    }
}
