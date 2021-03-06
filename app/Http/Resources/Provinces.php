<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Provinces extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        $response = [
            'success' => false,
            'message' => 'Data not found.',
        ];
        if (collect($this->toArray($request))->count()) {
            $response = [
                'success' => true,
                'message' => 'OK',
            ];
        }
        return $response;
    }
}
