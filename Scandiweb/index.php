<?php
include_once 'db_conn.php';
if (isset($_POST['delete'])) {
    $checkbox = $_POST['check'];
    for ($i = 0; $i < count($checkbox); $i++) {
        $del_id = $checkbox[$i];
        mysqli_query($conn, "DELETE FROM info WHERE sku='" . $del_id . "'");
        $message = "Data deleted successfully !";
    }
}
$result = mysqli_query($conn,"SELECT * FROM info");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/site.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Product list</title>
</head>
<body>
<h1> Product List</h1>
<form action="product_page.php">
    <p align="right"><input type="submit" value="Add" /></p>
</form>
<form method="post" action="">
    <p align="right"><button type="submit" class="btn btn-success" name="delete">DELETE</button></p>
    <hr>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th><input type="checkbox" id="checkAl"> Select All</th>
            <th>SKU</th>
            <th>Name</th>
            <th>Price</th>
            <th>Type</th>
            <th>Dimension</th>
        </tr>
        </thead>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["sku"]; ?>"></td>
                <td><?php echo $row["sku"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["type"]; ?></td>
                <td><?php echo $row["dimension"]; ?></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
</form>
<script>
    $("#checkAl").click(function ()) {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>
</body>
</html>
