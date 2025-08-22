<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            text-align: center;
            font-family: cursive;
            font-size: 50px;
        }
        form {
            display: block;
            padding: 40px 10px 40px 10px;
            margin-left: 350px;
            margin-right: 350px;
            background-color: gray;
            font-size: 30px;
            border: 10px;
            border-radius: 10px;
        }
        button {
            border: 3;
            padding: 10px;
            font-weight: bold;
            font-size: 20px;
            border-radius: 10px;
    
        }
        button:hover {
            color: red;
            box-shadow: black;
        }
        div {
            border-radius: 10px;
            font-family: cursive;
            
        }
    </style>
    <title>Registraion</title>
</head>
<body>
    <h1>Sign up</h1>
    <form action="registration.php" type="post" align="center">
        <div>
    Name : <input type="text" name="name"><br><br>
    Phone : <input type="number" name="Phone"><br><br>
    Email : <input type="text" name="email"><br><br>
    Password : <input type="number" name="password"><br><br>
    </div>
    <button type="submit" name="submit" >Submit</button><br>
    <p style="font-size: 20px;">Already have an account?</p>
    <button>Login here</button>
    </form>
    

</body>
</html>