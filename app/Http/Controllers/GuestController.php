<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $month = $request->get('month', date('m'));
            $year = $request->get('year', date('Y'));

            $bookings = Booking::with(['time', 'futsal_court'])
                ->whereMonth('date', $month)
                ->whereYear('date', $year)
                ->where('status', "1")
                ->orderBy('date', 'desc')
                ->latest()
                ->get();

            return DataTables::of($bookings)
                ->addIndexColumn()
                ->addColumn('time_id', function ($bookings) {
                    return $bookings->time->time_slot;
                })
                ->addColumn('futsal_court_id', function ($bookings) {
                    return $bookings->futsal_court->name;
                })
                ->rawColumns(['time_id', 'futsal_court_id'])
                ->make();
        }

        return view('guest');
    }

    public function aboutUs()
    {
        return view('user.aboutUs');
    }
}
