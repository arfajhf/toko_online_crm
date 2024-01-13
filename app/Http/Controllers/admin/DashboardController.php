<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Data_barang;
use App\Models\Data_pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // public function pesan(){
    //     $pesan = Data_pemesanan::all();
    // }

    public function index(){
        $data = Admin::all()->where('role', 'user');

        // barang
        $barang = Data_barang::all();
        $barangbaruCount = Data_barang::whereKondisi('baru')->count();
        $barangbaruPercentange = $barangbaruCount ? $barangbaruCount / $barang->count() * 100 : 0;
        $barangbekasCount = Data_barang::whereKondisi('bekas')->count();
        $barangbekasPercentange = $barangbaruCount ? $barangbekasCount / $barang->count() * 100 : 0;
        // pesanan
        $pesanCount = Data_pemesanan::count();
        $jumlahCount = Data_pemesanan::wherein('status', ['pending', 'dikirim', 'dikemas'])->count();
        $dikemasCount = Data_pemesanan::where('status','dikemas')->count();
        $dikemasPercentange = $dikemasCount ? $dikemasCount / $pesanCount * 100 : 0;
        $dikirimCount = Data_pemesanan::where('status','dikirim')->count();
        $dikirimPercentange = $dikirimCount ? $dikirimCount / $pesanCount * 100 : 0;
        $selesaiCount = Data_pemesanan::where('status','selesai')->count();
        $selesaiPercentange = $selesaiCount ? $dikirimCount / $pesanCount * 100 : 0;
        $view = Data_barang::all()
        ->where('id','<','4');

        // 'pending','dikemas','dikirim'

        $arrayColor = ['bg-primary', 'bg-success', 'bg-info', 'bg-warning', 'bg-danger'];
        $dataMonth = [
            '1' => 'Januari',
            '2' => 'Februari',
            '3' => 'Maret',
            '4' => 'April',
            '5' => 'Mei',
            '6' => 'Juni',
            '7' => 'Juli',
            '8' => 'Agustus',
            '9' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        $pemesananMonth =Data_pemesanan::select(DB::raw('month(tanggal_teransaksi) as month'), DB::raw('count(*) as count'))->groupBy('month')->get();
        // dd($pemesananMonth);
        $pemesananMonth->map(function ($row) use ($pesanCount, $arrayColor, $dataMonth) {
            $row->month_label = $dataMonth[$row->month];
            $row->month_percentange = $row->count / $pesanCount * 100;
            $row->month_color = $arrayColor[rand(0, 4)];
        });


        // $laporan = Data_pemesanan::where('setatus', 'dikirim')->or('status', 'selesai')->orderBy('tanggal_transaksi', 'desc')->first();

        return view('admin.dashboardadmin', compact('data', 'barang', 'dikemasCount', 'jumlahCount', 'dikemasPercentange', 'dikirimCount', 'dikirimPercentange', 'selesaiCount', 'selesaiPercentange', 'barangbaruCount', 'barangbaruPercentange', 'barangbekasCount', 'barangbekasPercentange', 'pemesananMonth', 'view'));
    }
}
