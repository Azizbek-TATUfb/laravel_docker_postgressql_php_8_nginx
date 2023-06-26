<?php

namespace App\Repositories;

use App\Helpers\TelegramHelpers;
use App\Models\Admin\News;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class NewsRepository implements Interfaces\BaseInterface
{
    private $entity;

    public function __construct(News $entity)
    {
        $this->entity = $entity;
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function store($params)
    {
        try {
            $params = $this->hasCheck($params);
            DB::beginTransaction();
            $this->entity->create($params);
            DB::commit();
        }catch (\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
            TelegramHelpers::sendMessage($text);
            Log::info('post - ' . $e->getMessage());
            DB::rollBack();
        }
    }
    public function update($params, $id){
        $query = News::find($id);
        try {
            $params = $this->hasCheck($params);
//            dd($params);
            DB::beginTransaction();
            $query->update($params);
            DB::commit();
        }catch (\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
            TelegramHelpers::sendMessage($text);
            Log::info('post-edit - ' . $e->getMessage());
            DB::rollBack();
        }
    }

    private function hasCheck($params =[]){

        $params['slug_uz'] = Str::slug($params['slug_uz']??$params['title_uz'], '-');
        $params['slug_ru'] = Str::slug($params['slug_ru']??$params['title_ru'], '-');
        $params['slug_en'] = Str::slug($params['slug_en']??$params['title_en'], '-');

        $params['has_uz'] = (!empty($params['title_uz']) && !empty($params['excerpt_uz']) && !empty($params['content_uz']))?1:0;
        $params['has_ru'] = (!empty($params['title_ru']) && !empty($params['excerpt_ru']) && !empty($params['content_ru']))?1:0;
        $params['has_en'] = (!empty($params['title_en']) && !empty($params['excerpt_en']) && !empty($params['content_en']))?1:0;
        $params['created_by'] = Auth::user()->id;
        $params['updated_by'] = Auth::user()->id;
        return $params;
    }

    public function getSiteNewsList()
    {
        $lang = App::getLocale();
        return News::select([
            "id" => 'news.id',
            "title_".$lang.' as title',
            "excerpt_".$lang." as excerpt",
            "date" => "date",
            "path" => "path"
        ])
        ->leftJoin('attachments', 'news.attachment_id', '=', 'attachments.id')
        ->whereNotIn('news.status', [ News::STATUS_DESTROY])
        ->orderByDesc('date')
            ->limit(News::LIMIT)
        ->get()
        ->toArray();
    }
}
