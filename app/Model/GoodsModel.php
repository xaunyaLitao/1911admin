<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{
    public $table="p_goods";   //表名
    public $primaryKey="goods_id";  //声明表字段
    public $timestamps = false;
}
