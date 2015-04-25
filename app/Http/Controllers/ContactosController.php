<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Contacto $contacto)
	{
		return view('contactos.index', compact('cita'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Contacto $contacto)
	{
		return view('contactos.create', compact('cita'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Contacto $contacto)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  Contacto $contacto
	 * @return Response
	 */
	public function show(Cita $cita, Contacto $contacto)
	{
		return view('contactos.show', compact('cita', 'contacto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Contacto $contacto
	 * @return Response
	 */
	public function edit(Cita $cita, Contacto $contacto)
	{
		return view('contactos.edit', compact('cita', 'contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  Contacto $contacto
	 * @return Response
	 */
	public function update(Cita $cita, Contacto $contacto)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Contacto $contacto
	 * @return Response
	 */
	public function destroy(Cita $cita, Contacto $contacto)
	{
		//
	}

}
