<?php

namespace App\Http\Controllers;

use App\Models\School;

class SchoolController extends Controller
{
    public function index()
    {
        $startDate = '2020-01-01';
        $endDate = '2020-01-30';

        $data = School::whereDate('inaugurated_date', '>=', $startDate)->whereDate('inaugurated_date', '<=', $endDate)->get();
        return $data;
    }

    public function getInauguratedSchool()
    {
        $data = School::select('id', 'school_name', 'inaugurated_date')->get();
        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }
}
