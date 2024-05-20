<?php
require_once('head.php');
?>
<style>
    .con{
        padding: 6rem;
    }
    body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
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
                <caption>Users Table</caption>
                <tr>
                    <th>Name</th>
                
                    <th>Email</th>
                    <th>Order</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">

                    <?php
                    $sql = "SELECT * FROM orders";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row["name"];
                        $email = $row["email"];
                        $message = $row["message"];
                        $date = $row["date"];
                       


                        echo '<tr class="table-primary" >';
                            echo "<td scope='row'>$name</td>";
                            echo "<td scope='row'>$email</td>";
                            echo "<td scope='row'>$message</td>";
                            echo "<td scope='row'>$date</td>";

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
        <!-- <a name="" id="" class="btn btn-primary" href="p_new.php" role="button">Create New Ad</a> -->
    </div>

</div>    

<?php
require_once('footer.php');
?>