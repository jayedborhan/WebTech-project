<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                     <table width = "800">
                    <tr>
                        <td>
                            <img height="120" src="logo.png">
                        </td>
                           
                </tr>    
                </table>
                    
                </td>
            </tr>
            <tr>
                <td>      
                    <H2>LOGIN</H2>
                    
                <form method="POST" action="logincheck.php"  >
                            <fieldset>
                               
                             Username: <input type="text" name="username" value=""/> <br>
                              Password: <input type="password" name="password" value=""/> <br> 
                              <hr>
                              <input type="checkbox" name="rememberme" value=""/> Remember Me <br/>
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset"><br/>
                            <a href="forgetpassword.php">Forgot Password?</a>  
            </fieldset>
        </form>
</td>
            </tr>


            <tr>
                <td align="center"><fieldset>
                    <legend>Help & Support</legend>
            </fieldset></td>
            </tr>

            
            <tr height =40>

                <td align="center">Copyright © 2023</td>
            </tr>
        </table>
    </center>
    </body>
</html>