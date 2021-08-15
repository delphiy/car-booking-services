<?php

namespace App\Http\Controllers;

use App\BookingDate;
use App\CarService;
use App\Http\Requests\CarServiceRequest;
use App\Http\Resources\CarServiceResource;
use App\Mechanic;

class CarServiceController extends Controller
{
    public function index() {
        return response()->json(
            CarServiceResource::collection(CarService::all())
        );
    }

    public function create(CarServiceRequest $request) {
        return response()->json(
            CarService::create($request->all())
        );
    }

    public function update(CarServiceRequest $request, $id) {
        $carService = CarService::find($id);
        $carService->name = $request->input('name');
        $carService->save();

        return response()->json($carService);
    }

    public function delete($id) {
        $carService = CarService::find($id);
        $carService->delete();

        return response()->json('Removed successfully.');
    }

    public function getServiceTypes($id){
        return response()->json(CarService::find($id)->serviceTypes);
    }

    public function getAvailableMechanics($date) {
        $unavailableMechanicsArr = Mechanic::whereHas('bookingDates', function ($q) use ($date) {
            $q->where('booking_date', $date);
        })->pluck('id');

        return response()->json(
            Mechanic::where('id', '!=', $unavailableMechanicsArr)->get()
        );
    }

}
