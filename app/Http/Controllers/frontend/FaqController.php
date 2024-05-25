<?php

namespace App\Http\Controllers\frontend;

use App\Enums\LocationStatusEnum;
use App\Models\Location;
use App\Models\Section;
use Illuminate\Routing\Controller as BaseController;

class FaqController extends BaseController
{
    public function index()
    {
        $sectionPage = 'faq-page';

        $data = [
            'content' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'single-content'])->first()->section_data ?? [],
            'faqs' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'faqs'])->first()->section_data ?? [],
            'seo' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'seo'])->first()->section_data ?? [],
            'locations' => Location::where('status', LocationStatusEnum::Active)->get(),
        ];

        return view('frontend.faq', $data);
    }
}
