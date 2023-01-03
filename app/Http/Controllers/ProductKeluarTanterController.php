<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\ExportProdukMasuk;
use App\Product;
use App\Product_Keluar;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;


class ProductKeluarTanterController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin,staff,lead');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $customers = Customer::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $invoice_data = Product_Keluar::all();
        return view('product_keluar_tanter.index', compact('products','customers','invoice_data'));
    }

    public function apiProductsOutTanter(){
        $product = Product_Keluar::all();

        return Datatables::of($product)
            ->addColumn('products_name', function ($product){
                return $product->product->nama;
            })
            ->addColumn('customer_name', function ($product){
                return $product->customer->nama;
            })
         
            ->rawColumns(['products_name','customer_name','action'])->make(true);

    }

    public function exportProductKeluarTanterAll($tglawal, $tglakhir)
    {

        $tanda_terima_bm = Product_Keluar::whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        $pdf = PDF::loadView('product_keluar_tanter.productKeluarTanterAllPDF',compact('tanda_terima_bm'));
        return $pdf->download('tanda_terima_product_keluar.pdf');
    }
}
