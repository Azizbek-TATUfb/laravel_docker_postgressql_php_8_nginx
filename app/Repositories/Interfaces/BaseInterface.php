<?php

namespace App\Repositories\Interfaces;

interface BaseInterface
{
    public function getAll();

    /**
     * @param $params
     * @return mixed
     */
    public function store($params);
}
