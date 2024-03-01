<?php
include 'includes/connect.php';
include 'includes/sidebar.php';
?>
<div class="main">
    <div class="container mt-5">
        <h1>Product Library</h1>
        <div class="row" style="margin: 40px;">
            <br><br><br>
            <div class="col-md-6">
                <h2>Add New Media</h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <form action="add_media.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" class="form-control" id="mediaFile" name="mediaFile">
                                    </div>
                                    <div class="mb-3"></div>
                                    <button type="submit" class="btn btn-primary">Upload Media</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h2>All Media</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Media</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM media";
                        $result = $connection->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td><img src='uploads/" . $row['file_name'] . "' style='max-width: 100px;' /></td>";
                                echo "<td>";
                                echo "<button class='btn btn-primary'>Edit</button>&nbsp;";
                                echo "<button class='btn btn-danger ml-2'>Delete</button>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>