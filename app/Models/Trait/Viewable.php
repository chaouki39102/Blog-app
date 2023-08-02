<?php

namespace App\Models\Trait;

use App\Models\View;

trait Viewable
{
        public static function bootViewable()
    {
        static::addGlobalScope('views_count',function ($q) {
            $q->withCount('views');
        });

    }
    public function views()
    {
        return $this->morphMany(View::class, 'view');
    }
    public function view()
    {
        View::when($userId = userId(), function ($q) use ($userId) {
            $q->whereUserId($userId);
        }, function ($q) {
            $q->whereIpAddress(request()->ip())->whereHasMorph('viewable', [static::class], function ($q) {
                $q->where('id', $this->id);
            });
        })->firstOr(function () {
                $this->views()->create(
                    [
                        'user_id' => userId(),
                        'ip_address' => request()->ip()
                    ]
                );
                $this->views_count++;
            }
        );
        return $this;
    }
}
