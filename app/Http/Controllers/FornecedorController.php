<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            'Fornecedor 1',
            'Fornecedor 2',
            'Fornecedor 3',
            'Fornecedor 4',
            'Fornecedor as',
            'Fornecedor adasdqs',
            'Fornecedor 1a',
            'Fornecedor a',
            'Fornecedor aaass',
            'Fornecedor sasa',
            'Fornecedor asdqw',
            'Fornecedor aszasd',
            'Fornecedor adasd',
            'Fornecedor 1xvcbs',
            'Fornecedor 1dsafqwe',
            'Fornecedor 1asdfhb',
    ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
