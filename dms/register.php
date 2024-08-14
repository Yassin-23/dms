<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form action="backend.php" method="post">
        <label >Full names</label><br>
        <input type="text" name="name" class="form-control"><br>
        <label>password</label><br>
        <input type="text" name="password" class="form-control"><br>
        <label>email</label><br>
        <input type="email" name="email" id="" class="form-control"><br>
        <label >role</label><br> 
        <select name="role" class="form-control">
            <option value="" selected> description</option>
            <option value="Admin">Admin</option>
            <option value="worker">Worker</option>
            <option value="deliverer">deliverer</option>
        </select> 
        <br> 
        <button type="submit" name="register" class=" btn btn-primary">register</button><br>
        <p>if you have no account login?<a href="index.php">here</a></p>
    </form>    
</body>
</html>
