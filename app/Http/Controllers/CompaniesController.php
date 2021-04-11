<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Categories;
use App\Models\User;
use App\Http\Requests\StoreCompanies; 


class CompaniesController extends Controller
{
    //
    public function home ()
    {
        return view('empresas.home');
    }
    
    public function search(Request $request)
    {
        $filters = $request->all();
        $company = new Companies();
        $filter = $request->filter;
        $empresas = $company->search($request->filter);
        return view('empresas.empresas',['empresas' => $empresas,'filters' => $filter]);
    }

    public function index ()
    {
        $empresas = Companies::paginate(4);
        return view('empresas.empresas',compact('empresas'));
    }

    public function create ()
    {
        $categories = Categories::get();
        foreach ($categories as $category) {
            $categoriesTemplate[] = $category->getAttributes();
        }
        return view('admin.create',["categories" => $categoriesTemplate]);
    }

    public function store(StoreCompanies $request)
    {
        $companies = Companies::create($request->all());
        foreach ($request->input('categoriesForm') as $categoriesForm) {
            $companies->companies()->attach($categoriesForm);
        }
        return view('empresas.home');
    }

    public function show ($id)
    {
        $result = Companies::where('id','=',$id)->with('companies')->get()->toArray();
        return view('empresas.empresa',['company' => $result[0]]);
    }
}
