<?php


namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;


class HerbController extends BaseController
{

    public function herb(Request $request)
    {
       $search= $request->get('name');
        $herbs = \DB::table('herb')
                ->join('pharm_properties','herb.id','=','pharm_properties.herb_id')
                ->select('herb.name')
                ->where('herb.name','like',"%$search%")
                ->orwhere('pharm_properties.name','like',"%$search%")
                ->distinct()
                ->get();


        return $this->sendResponse($herbs->toArray(), 'Herbs retrieved successfully.');
    }


}
