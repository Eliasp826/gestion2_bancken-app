<?php
namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ContactoFilter extends ApiFilter
{
    protected $safeParams = [

    ];

    protected $columnMap = [
        'empresas_id' => 'empresa_id',
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
