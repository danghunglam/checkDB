<?php
/**
 * Created by PhpStorm.
 * User: hunglam
 * Date: 20/07/2018
 * Time: 14:37
 */

namespace App\Contracts\Repository;


interface DBRepositoryInterface
{
//    public function index() :
    public function check() : bool;
}