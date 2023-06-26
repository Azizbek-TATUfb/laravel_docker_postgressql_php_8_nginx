<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\References\StoreRequest;
use App\Http\Requests\References\UpdateRequest;
use App\Services\ReferenceService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    use FileUpload;
    private $service;
    public function __construct(ReferenceService $service)
    {
        $this->service = $service;
    }

    public function referencesType()
    {
        $referencesTypes = $this->service->referencesType();
        return view('admin.reference.type',['referencesTypes' => $referencesTypes]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        $references = $this->service->index($request->type);
        return view('admin.reference.index',['references' => $references, 'type' => $request->type ,'name' => $request->name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        return view('admin.reference.create',[ 'type' => $request->type ,'name' => $request->name]);
    }

    /**
     * @param StoreRequest $request
     * @return void
     */
    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'uploads/references');
        $this->service->create($params);
        return redirect()->route('admin.reference.index', [ 'type' => $request->references_type_id ,'name' => $request->name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->service->edit($id);
        return view('admin.reference.show', compact('category'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id, Request $request)
    {
        $reference = $this->service->edit($id);
        $name = $request->name;
        return view('admin.reference.edit', compact('reference', 'name'));
    }

    /**
     * @param UpdateRequest $request
     * @param $id
     * @return void
     */
    public function update(UpdateRequest $request, $id)
    {
        $params = $request->validated();
        if ($request->hasFile('attachment_id')){
            $params = $this->fileUpload($params, $request, 'uploads/references');
//            if (file_exists(('uploads/news' . $user->getOriginal('photo')))) {
//                unlink(('uploads/authors' . $partner->image_path));
//            }
        }else{
            $params['attachment_id'] = $params['attachment_id_old'];
            unset($params['attachment_id_old']);
        }
        $this->service->update($params, $id);
        return redirect()->route('admin.reference.index', ['type' => $request->references_type_id ,'name' => $request->name]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $this->service->delete($id);
        return redirect()->route('admin.reference.index', ['type' => $request->type ,'name' => $request->name]);
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('uploads/references/'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('uploads/references/'.$fileName);
            $msg = 'Rasm yuklandi.';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
