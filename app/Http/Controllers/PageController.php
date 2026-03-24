<?php

namespace App\Http\Controllers;

use App\Services\PageDataService;

class PageController extends Controller
{
    public function __construct(
        private readonly PageDataService $pageData,
    ) {}

    public function index(string $locale)
    {
        $data = $this->pageData->getHomePageData($locale);
        $data['visionModalContent'] = $this->pageData->getVisionModalContent($locale);

        return view('pages.home', $data);
    }
}
