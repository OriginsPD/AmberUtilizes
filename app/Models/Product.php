<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property int $quantity
 * @property float $price
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cart[] $Cart
 * @property-read int|null $cart_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Sales[] $Sale
 * @property-read int|null $sale_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'quantity'
    ];

    public function Cart(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    public function Sale(): HasMany
    {
        return $this->hasMany(Sales::class);
    }
}
