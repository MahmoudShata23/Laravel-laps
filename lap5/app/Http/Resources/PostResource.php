<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            // 'user'=>
            // [
            //    'user_id' =>  $this->user->id,
            //    'user_name'  =>  $this->user->name,
            //    'user_email' =>  $this->user->email,
            // ]
            'user'=>new UserResource($this->user)
        //    'user'=>$this->user->name

        ];
    }
}
