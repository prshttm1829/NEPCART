<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OfficeSetting\StoreOfficeSettingRequest;
use App\Http\Requests\OfficeSetting\UpdateOficeSettingRequest;
use App\Models\OfficeSetting;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OfficeSettingController extends Controller
{
    public function index()
    {
        $officeSettings = OfficeSetting::latest()->get();
        return view('admin.officeSetting.index', compact('officeSettings'));
    }
    public function create()
    {
        return view('admin.officeSetting.create');
    }
    public function store(StoreOfficeSettingRequest $request)
    {
        OfficeSetting::create($request->validated());
        Alert::success('OfficeSetting added successfully');
        return back();
    }
    public function edit(OfficeSetting $officeSetting)
    {
        return view('admin.officeSetting.edit', compact('officeSetting'));
    }

    public function update(UpdateOficeSettingRequest $request, OfficeSetting $officeSetting)
    {
        $officeSetting->update($request->validated());
        Alert::success('OfficeSetting updated successfully');
        return redirect(route('admin.officeSetting.index'));
    }
    public function destroy(OfficeSetting $officeSetting)
    {
    $officeSetting->delete();
    Alert::success("OfficeSetting deleted successfully");
    return back();
    }

}
