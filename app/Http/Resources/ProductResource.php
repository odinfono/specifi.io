<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'product_name' => $this->product_name,
            'trade_price'  => $this->trade_price,
            'retail_price' => $this->retail_price,
            'quantity' => $this->quantity,
        ];
    }
}
