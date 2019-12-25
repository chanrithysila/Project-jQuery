<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                <?php
                    if (isset($data['data_user'])) {
                        $id = 1;
                        foreach ($data['data_user'] as $rows) {
                ?>
                    <form action="index2.php?action=edit_users&id=<?php echo $rows['userID']?>" method="post">
                        <div class="form-group">
                            <label>User Name:</label>
                            <input type="text" name="userName" value="<?php echo $rows['username']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <input type="radio" <?php if($rows['gender'] == "Male"){?> checked="checked"<?php }?> value="Male" name="gender">Male <br>
                            <input type="radio" <?php if($rows['gender'] == "Female"){?> checked="checked"<?php }?> value="Female" name="gender">Female
                        </div>
                        <div class="form-group">
                            <label>Age:</label>
                            <input type="number" value="<?php echo $rows['age']?>" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Height:</label>
                            <input type="number" value="<?php echo $rows['height']?>" name="height" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Role:</label>
                            <select class="form-control" name="role">
                                <option disabled>Select Role one..</option>
                                <option <?php if($rows['role'] == "Centre Forward"){?> selected="selected"<?php }?> value="Centre Forward" name="role">Centre Forward</option>
                                <option <?php if($rows['role'] == "Left MF"){?> selected="selected"<?php }?> value="Left MF" name="role">Left MF</option>
                                <option <?php if($rows['role'] == "Right MF"){?> selected="selected"<?php }?> value="Right MF" name="role">Right MF</option>
                                <option <?php if($rows['role'] == "Centre MF"){?> selected="selected"<?php }?> value="Centre MF" name="role">Centre MF</option>
                                <option <?php if($rows['role'] == "Left Fullback"){?> selected="selected"<?php }?> value="Left Fullback" name="role">Left Fullback</option>
                                <option <?php if($rows['role'] == "Right Fullback"){?> selected="selected"<?php }?> value="Right Fullback" name="role">Right Fullback</option>
                                <option <?php if($rows['role'] == "Centre Back"){?> selected="selected"<?php }?> value="Centre Back" name="role">Centre Back</option>
                                <option <?php if($rows['role'] == "GoalKeeper"){?> selected="selected"<?php }?> value="GoalKeeper" name="role">GoalKeeper</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" value="<?php echo $rows['email']?>" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" value="<?php echo $rows['address']?>" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Club Id:</label>
                            <input type="number" value="<?php echo $rows['clubID']?>" name="club" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description:</label><br>
                            <input type="text" value="<?php echo $rows['description']?>" id="description" name="description" class="form-control">
                        </div>
                        <a href="index2.php?action=viewUser" class="btn btn-success" id="back">Go Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit" name="editUser">
                    </div>
                </form>
                <?php
                            $id++;
                            }
                        }
                        ?>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>