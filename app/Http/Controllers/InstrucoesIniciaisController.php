<?php

namespace App\Http\Controllers;

use App\InstrucoesIniciais;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InstrucoesIniciaisController extends Controller
{
    private $instrucoesIniciaisModel;

    public function __construct(InstrucoesIniciais $instrucoesIniciaisModel)
    {
        $this->instrucoesIniciaisModel = $instrucoesIniciaisModel;
    }

    public function index()
    {
        $data = $this->instrucoesIniciaisModel->paginate(10);

        return \view('instrucoes-iniciais.index')->with('instrucoes', $data);
    }

    public function create()
    {
        return \view('instrucoes-iniciais.create');
    }
}
