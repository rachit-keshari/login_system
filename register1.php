<!DOCTYPE html>
<html>
<head>
   <title>Login System</title>
   <style type="text/css">
      h1
      {
         
         background-color: lightpink;
         text-align: center; 
         position: fixed;
         top: 20px;
         left: 0px;
         right: 0px;
      }
      #div1_1
      {
         background-color: yellow;
         margin-top: 100px;
         position: absolute;
         top:100px;
         left:66%;
         right:20px;
      }
      #div1
      {  
         background-color: lightblue;
         margin-top: 120px;
         
      }
      body
      {
         background-color: black;
      }      

      #div2
      {
         background-color: lightgreen;
         margin-top: 20px;   
      }
      table
      {
         background-color: lightblue;
         border-style: solid;
         border-color: red;
         border-width: 2px;
         margin-bottom: 20px;

         padding: 20px; 
      }

   </style>
</head>
<body>
   <h1>Login System</h1>
   <div id="div1">
      <h2 align="center">Enter your details :</h2>
      <form action="register_validation.php" method="post" enctype="multipart/form-data">
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
   <div id="div1_1">
          <h3 style="color:red;">error!!</h3>
         <table align="center">
            <?php
             session_start();
            ?>
             <tr>
               <td><?php echo $_SESSION['error']; ?></td>
            </tr>            
            <tr>
               <td>file name : <?php echo $_SESSION['fname']; ?></td>
            </tr>
             <tr>
               <td>file type : <?php echo $_SESSION['ftype']; ?></td>
            </tr>
             <tr>
               <td>file size : <?php echo $_SESSION['fsize']; ?></td>
            </tr>                        
         </table>
   </div>   
   <div id="div2" align="center">
      <h2>Sign up :</h2>
      <form action="login.html" method="post"><input type="submit" name="" value="Sign Up"></form>
   </div>

</body>
</html>