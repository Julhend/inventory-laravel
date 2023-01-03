<?php

namespace App\Http\Controllers;


use App\Exports\ExportProdukMasuk;
use App\Product;
use App\Product_Masuk;
use App\Supplier;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;


class ProductMasukTanterController extends Controller
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

        $suppliers = Supplier::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $invoice_data = Product_Masuk::all();
        return view('product_masuk_tanter.index', compact('products','suppliers','invoice_data'));
    }

    public function apiProductsInTanter(){
        $product = Product_Masuk::all();

        return Datatables::of($product)
            ->addColumn('products_name', function ($product){
                return $product->product->nama;
            })
            ->addColumn('supplier_name', function ($product){
                return $product->supplier->nama;
            })
            ->rawColumns(['products_name','supplier_name','action'])->make(true);

    }

    public function exportProductMasukTanterAll($tglawal, $tglakhir)
    {

        $tanda_terima_bm = Product_Masuk::whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        // $product_masuk = Product_Masuk::all();
        $pdf = PDF::loadView('product_masuk_tanter.productMasukTanterAllPDF',compact('tanda_terima_bm'));
        return $pdf->download('tanda_terima_product_masuk.pdf');
    }
}
