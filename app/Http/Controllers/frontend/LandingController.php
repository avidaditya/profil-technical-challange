<?php

namespace App\Http\Controllers\frontend;

use App\Models\Location;
use App\Models\Section;
use Illuminate\Routing\Controller as BaseController;
use App\Enums\LocationStatusEnum;
use App\Models\Solution;

class LandingController extends BaseController
{
    public function index()
    {
        $sectionPage = 'home-page';

        $data = [
            'singleContent' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'single-content'])->first()->section_data ?? [],
            'juries' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'juries'])->first()->section_data ?? [],
            'timelines' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'timelines'])->first()->section_data ?? [],
            'seo' => @Section::where(['section_page' => $sectionPage, 'section_name' => 'seo'])->first()->section_data ?? [],
            
        ];

        return view('frontend.index', $data);
    }

    public function counter()
    {
        $counter = Solution::where('status', 'published')->count();

        return response()->json([
            'counter' => $counter,
        ]);
    }
}
