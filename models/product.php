<?php 
class Product extends Db{
    public function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM `products`");
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function search($keyword, $page, $count)
    {
        // Tính số thứ tự trang bắt đầu
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM `products` 
        WHERE `name` LIKE ?
        LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $start, $count);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function searchCount($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` 
        WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function getAllproductsByCate($cate_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` 
        WHERE `category` = ?");
        $sql->bind_param("i", $cate_id);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    public function getproductsByCate($cate_id, $page, $count)
    {
        // Tính số thứ tự trang bắt đầu
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM `products` 
        WHERE `category` = ?
        LIMIT ?,?");
        $sql->bind_param("iii", $cate_id, $start, $count);
        $sql->execute();
        $products = array();
        $products = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $products;
    }
    function paginate($url, $total, $page, $count, $offset)
    {
        if ($total <= 0) {
            return "";
        }
        $totalLinks = ceil($total / $count);
        if ($totalLinks <= 1) {
            return "";
        }
        $from = $page - $offset;
        $to = $page + $offset;
        //$offset quy định số lượng link hiển thị ở 2 bên trang hiện hành
        //$offset = 2 và $page = 5,lúc này thanh phân trang sẽ hiển thị: 3 4 5 6 7
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }
        $link = "";
        $prev = "";
        $next = "";
        for ($j = $from; $j <= $to; $j++) {
            $link = $link . "<a  href = '$url&page=$j'> $j </a>";
        }
        if ($page > 1) {
            $prevPage = $page - 1;
            $prev = "<a  href='$url&page=$prevPage'> Prev Link </a>";
        }
        if ($page < $totalLinks) {
            $nextPage = $page + 1;
            $next = "<a  href ='$url&page=$nextPage'>
            Next Link </a>";
        }
        return $prev . $link . $next;
    }
}