<?php

    $action=(isset($_GET['action']))?$_GET['action']:[];
    $user=(isset($_SESSION['user']))?$user=$_SESSION['user']:[];
    $id=$user[0]['cliID'];
    $query_kiemtra=DP::run_query("SELECT prodSL AS 'soluong' FROM product WHERE prodID=?",[$id],2);
    if($action=='insert')
    { 
            $insert_HD=DP::run_query("INSERT INTO `orderr`(`ordDate`,`ordBill`, `ordStatus`
            , `cliID`)
            VALUES (DATE(NOW()),1,-2,?)",[$id],1);
            
            $query_HD=DP::run_query("SELECT MAX(ordID) FROM `orderr`",[],2);
                
            foreach($query_HD as $key =>$h)
            {
                foreach($_SESSION['cart'] as $item => $value2)
                {
                        $masp=$value2['id'];
                        $dongia=$value2['dongia'];
                        $soluong=$value2['soluong'];
                        $query_CTHD=DP::run_query("INSERT INTO `information_order`
                        (`ordID`, `prodID`, `infoOrderSL`, `infoOrderPrice`, `infoStatus`)
                        VALUES (?,?,?,?,1)",[$h['0'],$masp,$soluong,$dongia],1);
                        if($query_CTHD)
                        {
                                unset($_SESSION['cart'][$masp]);
                                echo "<script>";
                                echo "alert('Thêm thành công');";
                                echo "window.location='../pages/cart.php'";
                                echo "</script>";
                        }
                        else
                        {
                                echo "<script>";
                                echo "alert('Thêm thất bại');";
                                echo "window.location='../pages/cart.php'";
                                echo "</script>";
                        }
                }
            }
        }
    
?>