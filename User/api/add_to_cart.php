<?php
    // TH1:Chưa có giỏ hàng thì thêm giỏ
    //kiểm tra id có tồn tại không (sản phẩm có tồn tại không)
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query_giohang=DP::run_query("SELECT product.prodID,`prodName`, `prodPrice`, `prodSL`, `prodInit`, `prodReleaseYear`, `prodDescription`, `prodStatus`, `provID`, `catID`,images.img1 FROM `product` 
        JOIN `images` ON product.prodID = images.prodID WHERE product.prodID=?",[$id],2);

        $prodID=$query_giohang[0]['prodID'];
        $prodName=$query_giohang[0]['prodName'];
        $prodPrice=$query_giohang[0]['prodPrice'];
        $prodImg=$query_giohang[0]['img1'];
        $prodInit=$query_giohang[0]['prodInit'];
        $prodDes=$query_giohang[0]['prodDescription'];
        
        $action = (isset($_GET['action']))?$_GET['action']:'add';
        $soluong= (isset($_GET['soluong']))?$_GET['soluong']:1;
        $query_kiemtra=DP::run_query("SELECT prodSL AS 'soluong' FROM product WHERE prodID=?",[$id],2);

        if($action=='add')
        {
            if(isset($_SESSION['cart'][$id]))
                {
                //tang so luong cua mot cuon sach da co trong gio hang
                    $_SESSION['cart'][$id]['soluong']=
                    $_SESSION['cart'][$id]['soluong']+$soluong;
                }
                else
                {
                     if($query_kiemtra[0]['soluong']>='1')
                     {
                        //them mot sach moi vao gio hang
                         $_SESSION['cart'][$id]
                         =array(
                         'id'=>$prodID,
                         'name'=>$prodName,
                         'img'=>$prodImg,
                         'dongia'=>$prodPrice,
                         'donvi'=>$prodInit,
                         'mota'=>$prodDes,
                         'soluong'=>$soluong
                     ); 
                     }
                     else
                     {
                         echo "<script>";
                         echo "alert('Sản phẩm đã hết hàng !');";
                         
                         echo "</script>";
                     }
                }
        }
        if($action=='update')
        {
            $_SESSION['cart'][$id]['soluong']=$soluong;
        }
        if($action=='delete')
        {
            unset($_SESSION['cart'][$id]);
        }
    }
    
?>