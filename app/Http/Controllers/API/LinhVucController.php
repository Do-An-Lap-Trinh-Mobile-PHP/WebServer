<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
        $listLinhVuc = LinhVuc::all()->random(4);
        $result = [
            'success'   => true,
            'linh_vuc'    => $listLinhVuc
        ];
        return response()->json($result);
    }
    
}