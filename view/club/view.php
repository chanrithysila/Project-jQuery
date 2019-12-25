<a href="index.php?action=add"><button class="btn btn-success">Add New</button></a>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Club Id</th>
            <th>Leader Club</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>ClubName</th>
            <th>Decription</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php
    if (isset($data['club_data'])) {
        $id = 1;
        foreach ($data['club_data'] as $rows) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['age']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['clubName']; ?></td>
                    <td><?php echo $rows['description']; ?></td>
                    <td>
                        <a href="index2.php?action=viewUser&id=<?php echo $rows['clubID']; ?>"><i class="material-icons">remove_red_eye</i></a>
                        <a href="index.php?action=edit&id=<?php echo $rows['clubID']; ?>"><i class="material-icons">edit</i></a>
                        <a href="index.php?action=delete&id=<?php echo $rows['clubID']; ?>" onclick="return confirm('Are you sure to delete it??')"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
    <?php
            $id++;
        }
    }
    ?>
</table>