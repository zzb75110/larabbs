<?php

namespace App\Transformers;

use App\Models\Focu;
use League\Fractal\TransformerAbstract;

class FocusTransformer extends TransformerAbstract
{
    public function transform(Focu $focu)
    {
        return [
            'id'         => $focu->id,
            'user_id'    => $focu->user_id,
            'focus_id'   => $focu->focus_id,
            'created_at' => $focu->created_at->toDateTimeString(),
            'updated_at' => $focu->updated_at->toDateTimeString(),
        ];
    }
}