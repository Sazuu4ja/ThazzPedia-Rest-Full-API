<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'game_id'    => 'required|exists:games,id',
            'player_id'  => 'required|string|max:50',
            'nominal'    => 'required|numeric|min:1000',
            'proof_file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}