<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card example z-depth-5">
                    <div class="card-header text-center bg-primary text-light">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($data['edit_club'])){
                                $id = 1;
                                foreach($data['edit_club'] as $rows){
                            
                        ?>
                        <form action="index.php?action=data_edit&id=<?php echo $rows['clubID']?>" method="POST">
                            <div class="form-group">
                                <label for="name"><strong>Username:</strong></label><?php echo $rows['username']?>
                                <input type="text" class="form-control" name="username" value="<?php echo $rows['username']?>" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Gender:</strong></label><br>
                                <input type="radio" <?php if($rows['gender'] == "Male"){?> checked="checked"<?php }?> value="Male" name="gender">Male
                                <input type="radio" <?php if($rows['gender'] == "Female"){?> checked="checked"<?php }?> value="Female" name="gender">Female
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Age:</strong></label>
                                <input type="text" class="form-control" name="age" value="<?php echo $rows['age']?>" placeholder="Your Age...">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Email:</strong></label>
                                <input type="email" class="form-control" name="email" value="<?php echo $rows['email']?>" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Name of club:</strong></label>
                                <input type="text" class="form-control" name="clubName" value="<?php echo $rows['clubName']?>" placeholder="Your club name">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Description:</strong></label><br>
                                <textarea name="description"  cols="65" rows="3" value="<?php echo $rows['description']?>"></textarea>
                                <!-- <input type="textarea" class="form-control" name="descrip" placeholder="Description"> -->
                            </div>
                            <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                            <input type="submit" class="btn btn-primary float-right" name="edit" value="Edit">
                        </form>
                        <?php
                            $id++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>