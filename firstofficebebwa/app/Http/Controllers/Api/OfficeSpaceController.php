<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OfficeSpaceResource;
use App\Models\OfficeSpace;
use Illuminate\Http\Request;

class OfficeSpaceController extends Controller
{
  public function index()
  {
    $officeSpaces = OfficeSpace::with(['city', 'salesAccount'])->get();
    return OfficeSpaceResource::collection($officeSpaces);
  }

  public function show(OfficeSpace $officeSpace)
  {
    $officeSpace->load(['city', 'photos', 'benefits', 'salesAccount']);
    return new OfficeSpaceResource($officeSpace);
  }
}
