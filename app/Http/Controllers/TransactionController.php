<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Transaction::query();
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block bg-indigo-500 text-white rounded-md px-2 py-1 m-2" href="' . route('dashboard.transaction.show', $item->id) . '">Show</a>
                        <a class="inline-block bg-gray-500 text-white rounded-md px-2 py-1 m-2" href="' . route('dashboard.transaction.edit', $item->id) . '">Edit</a>
                    ';
                })
                ->editColumn('total_price', function ($item) {
                    return "Rp. " . number_format($item->total_price, 0, ',', '.') . ",-";
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        if (request()->ajax()) {
            $query = TransactionItem::with(['product'])->where('transactions_id', $transaction->id);
            return DataTables::of($query)
                ->editColumn('product.price', function ($item) {
                    return "Rp. " . number_format($item->product->price, 0, ',', '.') . ",-";
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.dashboard.transaction.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
