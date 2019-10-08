<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Util;

class ModeloController extends Controller
{
    protected $_model;
    protected $_modelName;

    /**
     * AbstractController constructor.
     */
    public function __construct()
    {
        $classe = substr(get_class($this), strrpos(get_class($this), '\\') + 1);
        if (!$this->_modelName) {
            $this->_modelName = 'App\\' . str_replace('Controller', '', $classe);
        }
        $entidade = strtolower(str_replace('Controller', '', $classe));
        if (!is_object($this->_model)) {
            $this->_model = new $this->_modelName();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(array $order = null)
    {
        $aItens = $this->_model->all();

        $response = [
            'data' => $aItens,
            'type' => 'success'
        ];

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($id = base64_decode($request->id)) {
            $this->_model = $this->_model->find($id);
        }
        $this->_model->fill($request->toArray());
        $this->_model->save();
        return redirect($this->_redirectSave);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aEdit = $this->_model->find(base64_decode($id));

        $response = [
            'data'   => $aEdit,
            'type'   => 'success',
            'status' => 200
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_model = $this->_model->find(base64_decode($id));
        $this->_model->delete();

        $response = [
            'type'   => 'success',
            'status' => 200
        ];

        return response()->json($response);
    }

    protected function _recuperarDados()
    {
        return null;
    }
}
