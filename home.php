<?php 

include "connect.php" ; 

$alldata = array() ; 

$alldata['status'] = "success" ; 

// $settings = getAllData("settings" , "1 = 1" , null , false )  ;

// $alldata['settings'] = $settings ; 

$categories = getAllData("categories" , null , null , false )  ;

$alldata['categories'] = $categories ; 

$productss = getAllData("products" , "product_active = 1  ORDER BY product_create_date DESC LIMIT 5 " , null , false );

$alldata['products'] = $productss;

$products = getAllData("products" , null , null , false )  ;

$alldata['products'] = $products ; 
 

$stores = getAllData("stores" , null , null , false )  ;

$alldata['stores'] = $stores ; 

// function getAllDataoffers()
// {
//     global $con;
//     $data = array();
//     $json = false;
//     $values = null;
    
//         $stmt = $con->prepare("SELECT O.* , P.* FROM offers O INNER JOIN products P ON O.offers_product_id = P.product_id;");
   
//     $stmt->execute($values);
//     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     $count  = $stmt->rowCount();
//     if ($json == true) {
//         if ($count > 0) {
//             echo json_encode(array("status" => "success", "data" => $data));
//         } else {
//             echo json_encode(array("status" => "failure"));
//         }
//         return $count;
//     } else {
//         if ($count > 0) {
//             return  array("status" => "success", "data" => $data);
//         } else {
//             return  array("status" => "failure");
//         }
//     }
// }


// $offers = getAllDataoffers()  ;

// $alldata['offers'] = $offers ; 

echo json_encode($alldata) ;
