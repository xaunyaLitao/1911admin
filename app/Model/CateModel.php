<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
    public $table="p_category";   //表名
    protected $primaryKey="cat_id";  //声明表字段
}
