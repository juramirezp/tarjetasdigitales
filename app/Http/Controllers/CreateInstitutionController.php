<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;

class CreateInstitutionController extends Controller
{
    public function create(){
		 return view('institution.create');
	 }

	 public function store(Request $request){

		 $institution = new Institution($request->all());

		 auth()->user()->institutions()->save($institution);

		 return $institution;
	 }
}
