<?php

include("config.php");
if (isset($_POST['input'])) {

    $input = $_POST['input'];

    $query = "SELECT * FROM student WHERE name LIKE '{$input}%' OR id LIKE '{$input}%'";

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
?>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>AGE</th>
                </tr>
            </thead>

            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $address = $row['address'];
                    $age = $row['age'];
                ?>

                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $age; ?></td>
                    </tr>

                <?php
                }

                ?>
            </tbody>

        </table>
<?php

    } else {
        echo "<h6 class = 'text-danger text-center mt-3'> No Data Found </h6>";
    }
}
?>