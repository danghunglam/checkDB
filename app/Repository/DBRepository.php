<?php

namespace App\Repository;


use App\Contracts\Repository\DBRepositoryInterface;
use Illuminate\Support\Facades\DB;

class DBRepository implements DBRepositoryInterface
{
    public function check() : bool
    {
        $results = DB::select('select 1=1');
        return $results;
    }

}