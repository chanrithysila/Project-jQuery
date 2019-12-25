    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <?php
        if (isset($data['club_data'])) {
            foreach ($data['club_data'] as $result) {
                $id = $_GET['id'];
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $result['userID']; ?></td>
                        <td><?php echo $result['username']; ?></td>
                        <td><?php echo $result['role']; ?></td>
                        <td><?php echo $result['email']; ?></td>
                        <td><?php echo $result['address']; ?></td>
                    </tr>
                </tbody>
        <?php
            }
        }
        ?>
    </table>