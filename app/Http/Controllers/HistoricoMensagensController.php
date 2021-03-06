<?php

namespace Edutrans\Http\Controllers;

use Illuminate\Http\Request;

use Edutrans\Http\Requests;
use Edutrans\Http\Controllers\Controller;
use Edutrans\HistoricoMensagem;

class HistoricoMensagensController extends Controller
{
	private $historicoMensagem;

	public function __construct(\Edutrans\HistoricoMensagem $historicoMensagem)
	{
		$this->historicoMensagem = $historicoMensagem;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    	$this->historicoMensagem->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($placa)
    {
        $h = $this->historicoMensagem->where(['placa'=>$placa])->orderby('created_at')->get();
        return $h;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
