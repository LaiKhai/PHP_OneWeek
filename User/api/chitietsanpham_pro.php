<?php
    $id=$_GET['id'];
    $query="SELECT product.prodID,`prodName`, `prodPrice`, `prodSL`, `prodInit`, `prodReleaseYear`, `prodDescription`, `prodStatus`, `provID`, `catID`,images.img1 FROM `product` 
    JOIN `images` ON product.prodID = images.prodID
    WHERE product.prodID=?";
    
    $sanpham=DP::run_query($query,[$id],2);
?>