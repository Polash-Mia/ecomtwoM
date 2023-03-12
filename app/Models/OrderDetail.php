<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\Cart;

class OrderDetail extends Model
{
    use HasFactory;
    private static $cartProducts;
    private static $orderDetail;

    public static function newOrderDetail($order)
    {
        self::$cartProducts = \Cart::getContent();
        
        foreach (self::$cartProducts as $cartProduct)
        {
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id             = $order->id;
            self::$orderDetail->product_id           = $cartProduct->id;
            self::$orderDetail->product_name         = $cartProduct->name;
            self::$orderDetail->product_image        = $cartProduct->attributes->image;
            self::$orderDetail->product_price        = $cartProduct->price;
            self::$orderDetail->product_quantity     = $cartProduct->quantity;
            self::$orderDetail->color                = $cartProduct->attributes->color;
            self::$orderDetail->size                 = $cartProduct->attributes->size;
            self::$orderDetail->hills                = $cartProduct->attributes->hills;
            self::$orderDetail->save();
        }
    }
}
