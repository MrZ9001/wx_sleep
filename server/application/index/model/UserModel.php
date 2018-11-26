<?php
namespace model\model;

use think\Model;

/**
 * 
 */
class  UserModel extend Model
{
  public function getUser()
  {
    $user = UserModel:get(1);
    echo json_encode(['name'=>$user['username']]);
  }
}