<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\QrResource;
use App\Models\Qr;
use Illuminate\Http\Request;

class QrController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $qrr = Qr::get();
        $qr = Qr::latest('id')->first();
        if (count($qrr) > 0) {
            return ApiResponse::sendResponse(200, 'QrCode Retrived successfuly', new QrResource($qr));
        } else {
            return ApiResponse::sendResponse(200, 'Not Found QrCode,Please book first');
        }
    }
}
