<?php

namespace App\Repositories;

use App\Helpers\TelegramHelpers;
use App\Models\Admin\Settings;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SettingsRepository implements BaseInterface
{
    private $entity;

    public function __construct(Settings $entity)
    {
        $this->entity = $entity;
    }
    public function getAll()
    {
        return Settings::select([
            "name_".App::getLocale()." as name",
            "link",
            "type",
            "key",
            "path",
        ]) ->leftJoin('attachments', 'settings.attachment_id', '=', 'attachments.id')
            ->where('settings.status', Settings::STATUS_ACTIVE)
            ->get()->keyBy('key')->toArray();
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
        $query = Settings::find($id);
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
