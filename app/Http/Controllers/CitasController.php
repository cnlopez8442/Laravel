<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CitasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$citas = Cita::all();
		return view('citas.index', compact('citas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('citas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  Cita $cita
	 * @return Response
	 */
	public function show(Cita $cita)
	{
		return view('citas.show', compact('cita'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Cita $cita
	 * @return Response
	 */
	public function edit(Cita $cita)
	{
		 return view('citas.show', compact('cita'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  Cita $cita
	 * @return Response
	 */
	public function update(Cita $cita)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Cita $cita
	 * @return Response
	 */
	public function destroy(Cita $cita)
	{
		//
	}

}
