<?php
require_once('head.php');


?>
<style>
    .con{
        padding: 6rem;
    }
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    .nav-link{
        color:white
    }
}
</style>


<div class="con"></div>
<div class="container">
    
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <caption>Products Table</caption>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php
                    $sql = "SELECT DISTINCT price,title,date,product_id FROM product WHERE unique_id = '$unique_id'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $title = $row["title"];
                        $price = $row["price"];
                        $date = $row["date"];
                        $p_id = $row["product_id"];


                        echo '<tr class="table-primary" >';
                            echo "<td scope='row'>$title</td>";
                            echo "<td scope='row'>$price</td>";
                            echo "<td scope='row'>$date</td>";
                            echo "<td scope='row'><a href='del.php?p=$p_id'>Delete</a></td>";
                        echo '<tr>';
                    }
                    ?>


                    <!-- <tr class="table-primary" >
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-primary">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr> -->
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
        <a name="" id="" class="btn btn-primary" href="p_new.php" role="button">Create New Ad</a>
    </div>

</div>    

<script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

<?php
require_once('footer.php');
?>