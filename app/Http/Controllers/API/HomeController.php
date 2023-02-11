<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Traits\ApiResponseTrait;
use App\Models\EnjoyFeature;
use App\Models\FrequentlyAsked;
use App\Models\OurCostumer;
use App\Models\OurDomain;
use App\Models\OurService;
use App\Models\setting;
use App\Models\SlideShow;
use App\Models\webHosting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use ApiResponseTrait;
    public function index(){
        $data['SlideShow']          =  SlideShow::get();
        $data['setting']            =  setting::get();
        $data['OurService']     = OurService::get();
        $data['webHosting']         = webHosting::get();
        $data['OurCostumer']        = OurCostumer::get();
        $data['OurDomain']          = OurDomain::get();
        $data['EnjoyFeature']       = EnjoyFeature::get();
        $data['FrequentlyAsked']    = FrequentlyAsked::get();


         return $this->apiResponse($data,'Succsefly', 200);

    }
}
