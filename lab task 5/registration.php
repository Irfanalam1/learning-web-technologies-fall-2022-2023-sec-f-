<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'null'){
            echo "invalid username/password";
        }

        if($_GET['err'] == 'invalid'){
            echo "username/password not found ...";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>

<html>
    <head>
        <title>PUBLIC HOME</title>
    </head>
    <body>
        
            <table>
                <tr>
                    <td>
                        <img src="Logo.png">
                    </td>
                    <td align="right" >
                        <a href="home.php">Home |</a>
                        <a href="login.php">Login |</a>
                        <a href="registration.php">Registration</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <form method="post" action="registrationCheck.php" enctype="">

                            <fieldset>
                                <legend>REGISTRATION</legend>
                                <table>
                                    <tr>
                                <td>
                                    Name:
                                </td>
                                <td>
                                    <input type="text" name="name" value=""><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Email:
                                </td>
                                <td>
                                    <input type="email" name="email" value=""><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    User Name:
                                </td>
                                <td>
                                    <input type="text" name="username" value=""><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Password:
                                </td>
                                <td>
                                    <input type="password" name="password" value=""><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Confirm Password:
                                </td>
                                <td>
                                    <input type="password" name="confirmpassword" value=""><br>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender :</legend> 
                                        <input type="radio" name="gender" value=""/>Male
                                        <input type="radio" name="gender" value=""/>Female
                                        <input type="radio" name="gender" value=""/>Other
                                    </fieldset>
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date of Birth:</legend>
                                        <input type="number" name="" value="">/<input type="number" name="" value="">/  <input type="number" name="" value="">(dd/m/yyy)<br>
                                        <hr>
                                        <input type="submit" name="submit" value="Submit">
                                        <input type="reset" name="reset" value="Reset">
                                    </fieldset>
                                </td>
                            </tr>           
                        </table>
                    </fieldset>
                </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="middle">
                        Copyright 2022
                    </td>
                </tr>
            </table>
        
    </body>
</html>