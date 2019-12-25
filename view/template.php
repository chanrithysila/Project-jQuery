<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-danger">This is the proccess of MVC</h3>
                <hr>
                <?php
                include 'view/'.$data['page'].'.php';
                ?>
            </div>
        </div>
    </div>

</body>

</html>