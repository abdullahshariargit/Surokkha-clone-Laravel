<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $divisions = Division::latest()->get();
        return view('Backend.district.index', compact('divisions'));
    }

    public function getAllData()
    {
        return District::with('division')->latest()->get();
    }
    function store(Request $request)
    {

        $crud =  District::create([
            'name' => $request->name,
            'division_id' => $request->division_id
        ]);
        if ($crud) {
            return true;
        }
    }

    public function show(District $district)
    {
        return $district->load('division');
    }

    public function edit(District $district)
    {
        return $district;
    }

    public function destroy(District $district)
    {
        return $district->delete();
    }
}
