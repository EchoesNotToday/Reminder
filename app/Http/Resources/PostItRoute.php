<?php
namespace App\Http\Resources;

use App\PostIt;
use Illuminate\Http\Resources\Json\Resource;

class PostItRoute extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
    

}
