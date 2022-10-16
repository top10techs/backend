 <?php  


$db = new PDO('mysql:host=localhost;dbname=testdb;charset=UTF-8', 
                  'username', 
                  'password',
                  array(PDO::ATTR_EMULATE_PREPARES => false,
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


?>

<?php
if(!empty($_POST))
{
    //database settings

    foreach($_POST as $field_name => $val)
    {
        //clean post values
        $field_id = strip_tags(trim($field_name));

        //from the fieldname:user_id we need to get user_id
        $split_data = explode(':', $field_id);
        $product_id = $split_data[1];
        $field_name = $split_data[0];
        if(!empty($product_id) && !empty($field_name) && !empty($val))
        {

            $affected_rows = $db->exec("UPDATE yourtable SET $field_name = '$val' WHERE product_ID = $product_id");
            echo $affected_rows;

            echo "Updated";
        } else {
            echo "Invalid Requests";
        }
    }
} 

else {
    echo "Invalid Requests";
}
?>
