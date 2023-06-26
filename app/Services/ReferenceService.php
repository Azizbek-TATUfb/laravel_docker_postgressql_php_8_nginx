<?php

namespace App\Services;

use App\Models\Admin\Reference;
use App\Models\Admin\ReferencesType;
use App\Repositories\ReferenceRepository;

class ReferenceService extends BaseService
{
    public function __construct(ReferenceRepository $repository)
    {
        $this->repository = $repository;
    }
    public function referencesType()
    {
        return ReferencesType::all();
    }
    public function index($type)
    {
        return Reference::where('references_type_id', $type)->whereNotIn('status', [ Reference::STATUS_DESTROY])->paginate(10);
    }

    public function whereType($type)
    {
        return $this->repository->type($type);
    }

}
