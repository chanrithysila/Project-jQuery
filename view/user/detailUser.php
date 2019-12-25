
<div class="cotainer mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['club'])) {
                    foreach ($data['club'] as $result) {
                        $id = $_GET['id'];
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $result['userID']; ?></td>
                                <td><?php echo $result['username']; ?></td>
                                <td><?php echo $result['gender']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['address']; ?></td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
</div>