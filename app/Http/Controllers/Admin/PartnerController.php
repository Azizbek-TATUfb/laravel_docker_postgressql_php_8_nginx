<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partners\StoreRequest;
use App\Http\Requests\Partners\UpdateRequest;
use App\Models\Admin\Partner;
use App\Services\PartnersService;
use App\Traits\FileUpload;

class PartnerController extends Controller
{
    use FileUpload;
    private $service;
    public function __construct(PartnersService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = $this->service->index();
        return view('admin.partners.index',['partners' => $partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $this->service->create($params);
        return redirect()->route('admin.partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('admin.partners.show', ['partner' => $partner]);
    }

    /**
     * @param Partner $partner
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $setting = Partner::where('status', Partner::STATUS_ACTIVE)->where('id', $id)->first();
        return view('admin.partners.edit', ['setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $params = $request->validated();
        $this->service->update($params, $id);
        return redirect()->route('admin.partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('admin.partners.index');
    }
}
