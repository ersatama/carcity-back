<?php

namespace App\Http\Resources\Slider;

use App\Domain\Contracts\MainContract;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            MainContract::ID    =>  $this->{MainContract::ID},
            MainContract::TITLE =>  $this->{MainContract::TITLE},
            MainContract::TITLE_KZ  =>  $this->{MainContract::TITLE_KZ},
            MainContract::IMG   =>  $this->{MainContract::IMG},
            MainContract::STATUS    =>  $this->{MainContract::STATUS}
        ];
    }
}
