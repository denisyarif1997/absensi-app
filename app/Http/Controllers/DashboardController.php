<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $attendanceCount = DB::selectOne("
        SELECT COUNT(*) AS total 
        FROM presences 
        WHERE DATE(created_at) = CURDATE()
    ")->total;

        $attendanceCountOut = DB::selectOne(query: "
        SELECT
	    SUM(
        CASE 
            WHEN DATE(updated_at) = CURDATE() THEN 
                CASE 
                    WHEN TIME(updated_at) = TIME(created_at) THEN 0
                    ELSE 1
                END
            ELSE 0
        END) AS total FROM presences")->total;
    
        $dayName = now()->locale('id')->format('l'); // Mengambil nama hari dalam Bahasa Indonesia


        return view('dashboard.index', [
            "title" => "Dashboard",
            "positionCount" => Position::count(),
            "userCount" => User::count(),
            "attendanceCount" => $attendanceCount ,
            "attendanceCountOut" => $attendanceCountOut,
            "dayName" =>$dayName
            // "absenthisday" => 
        ]);
    }
}
