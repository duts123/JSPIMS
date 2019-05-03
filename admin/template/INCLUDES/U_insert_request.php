<?php
  include 'connect.php'; 
if(isset($_POST["item_name"]))
{
 $item_name = $_POST["item_name"];
 $item_quan = $_POST["item_quan"];
 $item_supplier = $_POST["item_supplier"];
 $item_batch = $_POST["item_batch"];
 $item_date = $_POST["item_date"];
 $reason = $_POST["reason"];
 $query = '';
  
 for($count = 0; $count<count($item_name); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_name[$count]);
  $item_quan_clean = mysqli_real_escape_string($connect, $item_quan[$count]);
  $item_supplier_clean = mysqli_real_escape_string($connect, $item_supplier[$count]);
  $item_batch_clean = mysqli_real_escape_string($connect, $item_batch[$count]);
  $item_date_clean = mysqli_real_escape_string($connect, $item_date[$count]);
  if($item_name_clean != '' && $item_quan_clean != '' && $item_supplier_clean != '' && $item_batch_clean != '')
  {
   $batch_req = '
    INSERT INTO `t_spare_requisition_summary` (`BATCH_NO`,`REF_REQUEST_TYPE`, `DATE_REQUESTED`, `DATE_REVISED`, `DATE_APPROVED`, `DATE_RELEASED`, `STATUS_REQ`, `REMARKS`, `REQUESTED_BY`,`REASON_FOR_REQ`) VALUES ("'.$item_batch_clean.'","2", "'.$item_date_clean.'", NULL, NULL, NULL, 1, 4, 2, "'.$reason.'");
    ';
   $query .= '
   INSERT INTO `t_spare_requisition_old_stock` (`REF_STOCK_ID`, `QUANTITY`,`STOCK_SUPPLIER`, `REF_BATCH_NO`) VALUES ("'.$item_name_clean.'", "'.$item_quan_clean.'","'.$item_supplier_clean.'","'.$item_batch_clean.'");
   ';
  }
 }
 if($batch_req != '')
 {
  if(mysqli_multi_query($connect, $batch_req) && mysqli_multi_query($connect, $query))
  {
   echo "Success";
  }
  else 
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>