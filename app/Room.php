<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  const TYPE_AFFORDABLE = 'affordable';
  const TYPE_MIDDLE_CLASS = 'middleClass';
  const TYPE_VIP = 'vip';

  protected $table = 'rooms';
}