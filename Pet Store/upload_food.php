<?php
include_once 'config.php';
if (isset($_POST['btn-upload'])) {

      $file = rand(1000, 100000) . "-" . $_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      $file_size = $_FILES['file']['size'];
      $file_type = $_FILES['file']['type'];
      $folder = "uploads/";
      $name = $_POST['name'];
      $price = $_POST['price'];
      $code =$_POST['code'];
      $des = $_POST['des'];
      $quantity = $_POST['quantity'];

      // new file size in KB
      $new_size = $file_size / 1024;
      // new file size in KB

      // make file name in lower case
      $new_file_name = strtolower($file);
      // make file name in lower case

      $final_file = str_replace(' ', '-', $new_file_name);

      if(move_uploaded_file($file_loc, $folder . $final_file)) {
            $sql = "INSERT INTO tblfood(image,name,price,code,des,quantity) VALUES('$final_file','$name','$price','$code','$des','$quantity')";

            mysqli_query($db1, $sql);
?>
            <script>
                  alert('successfully uploaded');
                  window.location.href = 'insert_food.php?success';
            </script>
      <?php
      } else {
      ?>
            <script>
                  alert('error while uploading file');
                  // window.location.href='index.php?fail';
            </script>
<?php
      }
}
?>
<?php 
$id= $_POST['id'];
if (isset($_POST['btn-uploaded'])) {
    
    $sql = "DELETE FROM tblfood WHERE $id=id";

    mysqli_query($db1, $sql);
    ?>
    <script>
            alert('successfully Deleted');
            window.location.href = 'delete_food.php?success';
        </script>
        <?php
    
}

?>