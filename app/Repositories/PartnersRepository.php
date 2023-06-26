<?php

namespace App\Repositories;

use App\Helpers\TelegramHelpers;
use App\Models\Admin\Partner;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PartnersRepository implements Interfaces\BaseInterface
{
    private $entity;

    public function __construct(Partner $entity)
    {
        $this->entity = $entity;
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
    public function getAllSite()
    {
        $data = Partner::select([
            'path',
            'partners.id',
            'partners.link',
            'partners.name_'.App::getLocale().' as name'
        ])
        ->leftJoin('attachments', 'partners.attachment_id', '=', 'attachments.id')
        ->whereNotIn('partners.status', [ Partner::STATUS_DESTROY])
        ->get()->toArray();
        return $data;
    }

    /**
     * @param $params
     * @return void
     */
    public function store($params): void
    {
        try {
            DB::beginTransaction();
            $this->entity->create($params);
            DB::commit();
        }catch (\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
            TelegramHelpers::sendMessage($text);
            Log::info('store_settings - ' . $e->getMessage());
            DB::rollBack();
        }
    }

    /**
     * @param $params
     * @param $id
     * @return void
     */
    public function update($params, $id){
        $query = Partner::find($id);
        try {
            DB::beginTransaction();
            $query->update($params);
            DB::commit();
        }catch (\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
            TelegramHelpers::sendMessage($text);
            Log::info('store_settings - ' . $e->getMessage());
            DB::rollBack();
        }
    }
}
