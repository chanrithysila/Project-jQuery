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
                        <form action="index.php?action=add_club" method="POST">
                            <div class="form-group">
                                <label for="name"><strong>Username:</strong></label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Gender:</strong></label><br>
                                <input type="radio" value="Male" name="gender">Male
                                <input type="radio" value="Female" name="gender">Female
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Age:</strong></label>
                                <input type="text" class="form-control" name="age" placeholder="Your Age...">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Email:</strong></label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Name of club:</strong></label>
                                <input type="text" class="form-control" name="clubName" placeholder="Your club name">
                            </div>
                            <div class="form-group">
                                <label for="name"><strong>Description:</strong></label><br>
                                <textarea name="description"  cols="65" rows="3"></textarea>
                                <!-- <input type="textarea" class="form-control" name="descrip" placeholder="Description"> -->
                            </div>
                            <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                            <input type="submit" name="create" class="btn btn-primary float-right" value="Create">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>