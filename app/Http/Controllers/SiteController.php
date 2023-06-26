<?php

namespace App\Http\Controllers;

use App\Models\Admin\ReferencesType;
use App\Repositories\NewsRepository;
use App\Repositories\PartnersRepository;
use App\Repositories\ReferenceRepository;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $newsRepository;
    protected $partnersRepository;
    protected $referenceRepository;
    public function __construct(NewsRepository $newsRepository, PartnersRepository $partnersRepository, ReferenceRepository $referenceRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->partnersRepository = $partnersRepository;
        $this->referenceRepository = $referenceRepository;
    }

    public function index(Request $request)
    {
        $news = $this->newsRepository->getSiteNewsList();
        $partners = $this->partnersRepository->getAllSite();
        $services = $this->referenceRepository->getSiteList(ReferencesType::SERVICES_ID, ReferencesType::SERVICES_LIMIT);
        $products = $this->referenceRepository->getSiteList(ReferencesType::PRODUCTS_ID, ReferencesType::PRODUCTS_LIMIT);

        return view('layouts.site',compact('news','partners','services','products'));
    }
}
