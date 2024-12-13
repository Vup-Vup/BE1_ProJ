<?php
class Cart extends Db
{
    public function getCart($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `cart` WHERE `user` = ?");
        $sql->bind_param("i", $user_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
