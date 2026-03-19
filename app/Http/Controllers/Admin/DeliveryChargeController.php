<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DeliveryCharge\StoreDeliveryChargeRequest;
use App\Http\Requests\DeliveryCharge\UpdateDeliveryChargeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeliveryCharge;
use RealRashid\SweetAlert\Facades\Alert;

class DeliveryChargeController extends Controller
{
  public function index()
  {
    $deliveryCharges = DeliveryCharge::latest()->get();
    return view('admin.deliveryCharge.index', compact('deliveryCharges'));
  }


  public function create()
  {
    return view('admin.deliveryCharge.create');
  }



  public function store(StoreDeliveryChargeRequest $request)
  {
    DeliveryCharge::create($request->validated());
    Alert::success('Delivery Charge added successfully');
    return redirect(route('admin.deliveryCharge.index'));
  }


  public function edit(DeliveryCharge $deliveryCharge)
  {
    return view("admin.deliveryCharge.edit", compact('deliveryCharge'));
  }


  public function update(UpdateDeliveryChargeRequest $request, DeliveryCharge $deliveryCharge)
  {
    $deliveryCharge->update($request->validated());
    Alert::success('Delivery Charge updated successfully');
    return redirect(route('admin.deliveryCharge.index'));
  }


  public function destroy(DeliveryCharge $deliveryCharge)
  {
    $deliveryCharge->delete();
    Alert::success('Delivery Charge deleted successfully');
    return back();
  }
}
