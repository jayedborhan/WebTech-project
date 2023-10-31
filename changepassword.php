<?php
session_start();
if(isset($_COOKIE['flag'])){
?>



<html>
    <head>
        <title>Change Password</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>

                <td colspan="2"> 
                    <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="logo.png">
                        </td>
                        <td align="right">
                        Logged in as <a href="viewprofile.php"> <?php echo $_SESSION['name'] ?></a> |
                                    <a href="logout.php">Logout</a>
                    </td>    
                </tr>    
                </table>
                </td>
            </tr>
            <tr>












                <td width="300" >
                   
                <ul>
                    <!-- <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li> -->

                     <?php
                        if (trim($_SESSION['role'])=="admin")
                    {
                        ?>
                        <li> <a href="admindashboard.php">Admin Dashboard</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                       
                        
                        <li> <a href="logout.php"> Logout</a></li> 
                    <?php
                    }
                    else if (trim($_SESSION['role'])=="admin")
                    {
                        ?>

                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>

                        <?php
                    }
                    else if (trim($_SESSION['role'])=="customer")
                    {
                        ?>
                         <li> <a href="search.php">Search</a></li>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }
                    else if (trim($_SESSION['role'])=="employee")
                    {
                        ?>
                        <li> <a href="viewprofile.php">  Profile</a></li>
                        <li> <a href="setting.php">Settings</a></li>
                        
                        <li> <a href="logout.php"> Logout</a></li>
                        <?php
                    }

                    ?>
                    </ul>

                </td>




                <td>

                      <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        <table>
                                            <tr>
                                                <td>Current Password</td>
                                                <td> :<input type="password" name="currentpassword" value=""/>   </td>
                                                
                                                
                                            </tr>
                                            <tr>
                                            <td>New Password</td>
                                                <td> :<input type="password" name="newpassword" value=""/>   </td>               
                                            </tr>
                                            <tr>
                                            <td>Retype New Password</td>
                                                <td> :<input type="password" name="retypenewpassword" value=""/>   </td>
                                            </tr>
                                          
                                            
                                </table>
                                <hr>
                                <input type="submit" name="submit" value="Submit"/>
                      </fieldset>

                </td>





            </tr>




            <tr>
                <td colspan="2" align="center"><fieldset>
                    <legend>Help & Support</legend>
                    <a href="">Contact Us</a>  <br>
                    <a href="">Complain</a> <br>
                    <a href="">FAQ</a> <br>
            </fieldset></td>
            </tr>




            <tr height ="40" >
                <td colspan="2" align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>

<?php
}else{
    header('location: login.php'); 
}
?>