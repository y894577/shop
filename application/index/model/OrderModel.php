<?php


namespace app\index\model;


use think\Db;
use think\Model;

class OrderModel extends Model
{
    public function selectAllOrder()
    {
        $result = Db::table('order')->select();
        return $result;
    }

    public function selectOrder()
    {

    }

    public function deleteOrder($orderID)
    {
        $result = Db::table('order')->where('orderID', $orderID)->delete();
        return $result;
    }

    public function updateOrder($data)
    {
        $orderID = $data['orderID'];
        var_dump($orderID);
        $result = Db::table('order')->where('orderID', $orderID)->update($data);
    }

    public function addOrder($data)
    {
        $result = Db::table('order')->insert($data);
        return $result;
    }
}