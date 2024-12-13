<?php
class Thanhvien extends Db
{
    public function getThanhVien($username, $password)
    {
        $sql = self::$connection->prepare("SELECT id FROM thanhvien WHERE username = ? and `password`=?");
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        $items = $sql->get_result()->fetch_assoc();
        return $items;
    }
    public function getDangKy($username, $password)
    {
        // Kiểm tra xem username đã tồn tại chưa
        $check_user = "SELECT username FROM thanhvien WHERE username = '$username'";
        $result_user = mysqli_query(self::$connection, $check_user);
        if (mysqli_num_rows($result_user) > 0) {
            echo "Tên đăng nhập đã tồn tại.";
        } else {
            $sql = self::$connection->prepare("INSERT INTO `thanhvien`( `username`, `password`) VALUES  ( ?, ?)");
            $sql->bind_param("ss", $username, $password);
            $sql->execute();
        }



        // if ($sql->execute()) {
        //     return true; // Đăng ký thành công
        // } else {
        //     return false; // Đăng ký thất bại
        // }
    }
}
