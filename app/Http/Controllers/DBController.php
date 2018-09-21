<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repository\DBRepositoryInterface;


class DBController extends Controller
{
    protected $DBRepository;

    public function __construct(DBRepositoryInterface $DBRepository)
    {
        $this->DBRepository = $DBRepository;
    }

    public function check()
    {
        $check = $this->DBRepository->check();
        if($check){
            return response()->json( ['result'=>true] );
        }
        return response()->json( ['result'=>false] );
    }
}
