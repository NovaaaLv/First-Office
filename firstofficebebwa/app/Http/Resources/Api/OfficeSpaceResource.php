<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfficeSpaceResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    // return parent::toArray($request);
    return [
      'id' => $this->id,
      'name' => $this->name,
      'slug' => $this->slug,
      'duration' => $this->duration,
      'price' => $this->price,
      'thumbnail' => $this->thumbnail,
      'about' => $this->about,
      'city' => new CityResource($this->whenLoaded('city')),
      'salesAccount' => new SalesAccountResource($this->whenLoaded('salesAccount')),
      'photos' => OfficeSpacePhotoResource::collection($this->whenLoaded('photos')),
      'benefits' => OfficeSpaceBenefitResource::collection($this->whenLoaded('benefits')),
    ];
  }
}
