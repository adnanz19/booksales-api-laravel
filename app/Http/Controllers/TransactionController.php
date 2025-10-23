<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Data not found",
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resource",
            "data" => $transactions,
        ], 200);
    }

    public function store(Request $request){
        //1 cek validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors(),
            ], 422);
        }

        //2 generate order number || TRX001
        $uniqueCode = "TRX" . strtoupper((uniqid()));

        //3 ambil user sedang login & cek login (apakah ada data user)
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                "success" => false,
                "message" => "User not found",
            ], 404);
        }

        //4 mencari data buku dari request
        $book = Book::find($request->book_id);

        //5 cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                "success" => false,
                "message" => "Stock not enough",
            ], 400);
        }

        //6 hitung total harga = jumlah buku * harga buku
        $totalAmount = $book->price * $request->quantity;

        //7 kurangi stok buku
        $book->stock -= $request->quantity;
        $book->save();

        //8 simpan data transaksi
        $transaction = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            "success" => true,
            "message" => "Transaction created successfully",
            "data" => $transaction,
        ], 201);

    }

    public function show(string $id){
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found",
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get detail resource",
            "data" => $transaction,
        ], 200);
    }

    public function update(Request $request, string $id){
        
    }

    public function destroy(string $id){
        
    }
}
