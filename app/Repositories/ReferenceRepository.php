<?php

namespace App\Repositories;

use App\Models\Admin\Reference;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReferenceRepository implements Interfaces\BaseInterface
{
    private $entity;
    public function __construct(Reference $entity)
    {
        $this->entity = $entity;
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @inheritDoc
     */
    public function store($params)
    {
        DB::beginTransaction();
        try{
            $params = $this->hasCheck($params);
            $this->entity->create($params);
            DB::commit();
        }catch(\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
//            TelegramHelpers::sendMessage($text);
            DB::rollback();
            Log::channel("custom")->error($e->getMessage());
        }
    }
    public function update($params, $id)
    {
        DB::beginTransaction();
        try{
            $params = $this->hasCheck($params);
            $this->entity->where('id', $id)->update($params);
            DB::commit();
        }catch(\Exception $e){
            $text = "Error = : ". json_encode($e->getMessage());
            $text.="Class".__CLASS__."\n";
            $text .="Line : ".__LINE__;
//            TelegramHelpers::sendMessage($text);
            DB::rollback();
            Log::channel("custom")->error($e->getMessage());
        }
    }
    public function delete($id)
    {
        $this->entity->where('id', $id)->delete();
    }
    public function edit($id)
    {
        return $this->entity->where('id', $id)->first();
    }

    public function type($type)
    {
        if (!$reference = Reference::where('references_type_id', $type)->get()->toArray()) {
            throw new NotFoundException('Reference is not fount');
        }
        return $reference;
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

    public function getSiteList($type, $limit = 3)
    {
        $lang = App::getLocale();
        $reference = Reference::select([
            "id" => 'references.id',
            "title_".$lang.' as title',
            "excerpt_".$lang." as excerpt",
            "date" => "date",
            "path" => "path"
        ])
            ->leftJoin('attachments', 'references.attachment_id', '=', 'attachments.id')
            ->where('references_type_id', $type)
            ->whereNotIn('references.status', [ Reference::STATUS_DESTROY])
            ->orderByDesc('date')
            ->limit($limit)
            ->get()->toArray();
        if (!$reference ) {
            throw new NotFoundException('Reference is not fount');
        }
        return $reference;
    }
}
