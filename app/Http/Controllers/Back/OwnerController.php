<?php

namespace App\Http\Controllers\Back;


use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FutsalCourt;
use Yajra\DataTables\Facades\DataTables;
use Mpdf\Mpdf;

class OwnerController extends Controller
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

        return view('owner.rekap-per-bulan');
    }

    public function dashboard()
    {
        $userCount = User::count();
        $bookingCount = Booking::where('status', "1")->count();
        $adminCount = User::where('role', "admin")->count();

        return view('owner.dashboard', compact('userCount', 'bookingCount', 'adminCount'));
    }

    public function downloadPDF(Request $request)
    {
        $month = $request->get('month', date('m'));
        $year = $request->get('year', date('Y'));

        $bookings = Booking::with(['time', 'futsal_court'])
            ->whereMonth('date', $month)
            ->whereYear('date', $year)
            ->where('status', "1")
            ->orderBy('date', 'desc')
            ->get();

        // Buat instance mPDF
        $mpdf = new Mpdf();

        // Buat HTML untuk PDF
        $html = view('owner.rekap-pdf', compact('bookings', 'month', 'year'))->render();

        // Tulis HTML ke PDF
        $mpdf->WriteHTML($html);

        // Output PDF ke browser
        $mpdf->Output("rekap_booking_{$month}_{$year}.pdf", 'D');
    }
}
