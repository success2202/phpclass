<?php
// declare(strict_types = 1);
// include 'includes/class-autoloader.inc.php';

?>

<!doctype html>
<html lang="en" dir ="ltr">
<head>
    <title></title>

    <style>
        .wrapper{
            position: relative;
            

        }
    </style>
</head>
<body>
    
   <form action="../includes/cal.inc.php" method="post">
<p><h1>CALCULATOR</h1></p>
<input type="number" name="num1" placeholder="enter the first number">
<select name="operat" id="">
    <option value="add">Add</option>
    <option value="sub">Sub</option>
    <option value="div">Division</option>
    <option value="mul">Multiply</option>
</select>
<input type="number" name="num2" placeholder="enter the second number">
<button type="submit1" name="submit">Calculate</button>


   </form>
<br> <br>

<?php
// $testObject = new Test();
// $testObject->getUsers();

?>

<style type ="text/css">
#text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: lightblue;
border: none;
}

#box{

background-color: grey;
margin: auto;
width: 300px;
padding: 20px;

}

#boxLeft{

background-color: skyblue;
margin: auto;
width: 300px;
padding: 20px;

}
       </style>



<div id="box">
        <form action="includes/signup.inc.php" method="POST">
            <div style ="font-size: 12px; margin: 10px; color: white;">SignUp</div>

            <input id="text" type="text" name="username" placeholder="username:"> <br> <br>
            <input id="text" type="password"  name="password" placeholder="password:"> <br> <br>
            <input id="text" type="password"  name="repassword" placeholder="repeat password:"> <br> <br>
            <input id="text" type="email"  name="email" placeholder="enter email:"> <br> <br>
            <button type="submit" name="submit">Sign Up</button>
   
        </form>
</div>
<br> <br>

    <div id="boxLeft">
        <form action="" method="POST">
            <div style ="font-size: 12px; margin: 10px; color: white;">Login</div>

            <input id="text" type="text" name="username" placeholder="username:"> <br> <br>
            <input id="text" type="password"  name="password" placeholder="password:"> <br> <br>
            <button type="submit" name="login">Login</button>

        </form>

    </div>

   
</body>
</html>