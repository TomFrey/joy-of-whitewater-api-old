<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class StatusFilter extends ApiFilter{
    protected $safeParams = [
        'name' => ['eq'],
        'text' => ['eq']
    ];

    protected $operatorMap = [
        'eq' => '='
    ];
}