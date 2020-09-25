<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'value', 'type', 'only_once', 'expired_at', 'description'];

    protected $dates = ['expired_at'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }


    public function isAbsolute()
    {
        return $this->type === 1;
    }

    public function isOnlyOnce()
    {
        return $this->only_once === 1;
    }

    public function availableForUse()
    {
        $this->refresh();
        if (!$this->isOnlyOnce() || $this->orders->count() === 0) {
            return is_null($this->expired_at) || $this->expired_at->gte(Carbon::now());
        }
        return false;
    }

    public function applyCost($price)
    {
        if ($this->isAbsolute()) {
            return $price - ($price * $this->value / 100);

        } else {
            return $price - ($price * $this->value / 100);
        }
    }
}
