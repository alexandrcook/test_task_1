<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'client' => $this->client,
            'product' => $this->product,
            'total' => $this->total,
            'date' => $this->date,
            'formattedDate' => Carbon::createFromFormat('m/d/Y', $this->date)->format('Y-m-d') //todo: get formats from model
        ];
    }
}
