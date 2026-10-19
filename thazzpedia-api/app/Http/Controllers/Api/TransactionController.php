<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::with('game');

        if ($request->has('search') && $request->search != '') {
            $query->where('player_id', 'like', '%' . $request->search . '%');
        }

        if ($request->has('game_id') && $request->game_id != '') {
            $query->where('game_id', $request->game_id);
        }

        return response()->json($query->paginate(10));
    }

    public function store(StoreTransactionRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('proof_file')) {
            $path = $request->file('proof_file')->store('proofs', 'public');
            $validated['proof_file'] = $path;
        }

        $transaction = Transaction::create($validated);

        return response()->json([
            'message' => 'Transaksi Top-Up berhasil dibuat!',
            'data' => $transaction
        ], 201);
    }
}