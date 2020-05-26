<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
   <title>Login System</title>
   <style type="text/css">
      h1
      {
         background-color: lightpink;
         text-align: center; 
      }
      #div1
      {  
         background-color: lightblue;
         margin-top: 100px;
      }
      #div2
      {
         background-color: lightgreen;
         margin-top: 20px;  
      }
      body
      {
         background-color: black;
      }
      table
      {
         border-style: solid;
         border-color: red;
         border-width: 2px;

         padding: 20px; 
      }

   </style>
</head>
<body>
   <h1>Login System</h1>
   <div id="div1">
      <h2 align="center">Enter your details :</h2>
      <form action="register_validation.php" method="post" enctype="multipart/form-data" >
         <table align="center">
            <tr>
               <td>Username : </td>
               <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
               <td>Password : </td>
               <td><input type="password" name="password" placeholder="Enter Password"></td>
            </tr>
            <tr>
               <td>Upload profile pic :   </td>
               <td><input type="file" name="myfile"></td>
            </tr>        
            <tr>
               <td align="center"><input type="Submit" name="" value=" Submit Details"></td>
            </tr>
         </table>
      </form>
   </div>
   <div id="div2" align="center">
      <h2>Sign up :</h2>
      <form action="login.html" method="post"><input type="submit" name="" value="Sign Up"></form>
   </div>

</body>
</html>


