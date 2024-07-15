<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class EmpresasFilter extends ApiFilter
{
    protected $safeParams = [
        'nombre_empresa' => ['eq', 'like'],
        'direccion' => ['eq', 'like'],
        'telefono' => ['eq', 'gt', 'lt'],
        'celular' => ['eq', 'gt', 'lt'],
        'extension' => ['eq', 'gt', 'lt'],
        'correo_electronico' => ['eq', 'like'],
        'url' => ['eq', 'like'],
    ];

    protected $columnMap = [
        'rnc' => 'rnc',
        'nombre_empresa' => 'nombre_empresa',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}
