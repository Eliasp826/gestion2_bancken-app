<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ContactoFilter extends ApiFilter
{
    protected $safeParams = [
        'empresasid' => ['eq'],
        'nombres' => ['like'],
        'apellidos' => ['like'],
        'sexo' => ['eq'],
        'cargo' => ['like'],
        'correo_electronico' => ['eq', 'like'],
        'correo_electronico2' => ['eq', 'like'],
        'telefono' => ['eq', 'gt', 'lt'],
        'telefono2' => ['eq', 'gt', 'lt'],
        'extension' => ['eq', 'gt', 'lt'],
        'celular' => ['eq', 'gt', 'lt'],
        'url' => ['eq', 'like'],
    ];

    protected $columnMap = [
        'empresasid' => 'empresas_id',
        'correoelectronico' => 'correo_electronico',
        'correo_electronico2' => 'correo_electronico2',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',
    ];

}
