<?php

namespace App\Services;

abstract class BaseService
{
    protected $repository;
    /**
     * @param $params
     * @return mixed
     */
    public function create($params)
    {
        return $this->repository->store($params);
    }

    public function edit($id)
    {
        return $this->repository->edit($id);
    }
    /**
     * @param $params
     * @param $id
     * @return mixed
     */
    public function update($params, $id)
    {
        return $this->repository->update($params, $id);

    }
    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
