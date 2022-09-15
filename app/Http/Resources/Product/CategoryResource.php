<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id'=>(int) $this->id,
            'name'=>(string) $this->name,
            'descroption'=>(string) $this->descroption ,
            'parent_name'=>(string)$this->parent?->name ??'This is Main Category' ,
            'sub_categories'=>(object)SubCategoryResource::collection($this->children),
            'active'=>(boolean)$this->active ,
        ];
    }
}
