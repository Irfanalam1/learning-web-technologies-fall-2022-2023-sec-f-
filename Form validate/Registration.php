
<?php
$fname_err = $lname_err = $faname_err = $maname_err = $email_err = $phone_err = $htadd_err = $uname_err = "";
$pass_err = $cpass_err = $gender_err = $comment_err = $areacode_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//first name
    if(empty($_POST ['fname'])){
        $fname_err = "First Name requried";
    }
    else{
        $fname = input_data($_POST['fname']);
        if(!preg_match("/^[a-zA-z ]*+$/", $fname)) {
            $fname_err = "Only alphabet are allowed";
        }
    }
    //last name
    if(empty($_POST ['lname'])){
        $lname_err = "Last Name requried";
    }
    else{
        $lname = input_data($_POST['lname']);
        if(!preg_match("/^[a-zA-z ]*+$/", $lname)) {
            $lname_err = "Only alphabet are allowed";
        }
    }
    //fathername
    if(empty($_POST ['faname'])){
        $faname_err = "Father's Name requried";
    }
    else{
        $faname = input_data($_POST['faname']);
        if(!preg_match("/^[a-zA-z ]*+$/", $faname)) {
            $faname_err = "Only alphabet are allowed";
        }
    }
    //mothername
    if(empty($_POST ['maname'])){
        $maname_err = "Mother's Name requried";
    }
    else{
        $maname = input_data($_POST['maname']);
        if(!preg_match("/^[a-zA-z ]*+$/", $maname)) {
            $maname_err = "Only alphabet are allowed";
        }
    }
    //email
    if(empty($_POST ['email'])){
        $email_err = "Email requried";
    }
    else{
        $email = input_data($_POST['email']);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email";
        }
    }
    //phone
    if(empty($_POST['phone'])){
        $phone_err = "Mobile number is required";
    }
    else{
        $phone = input_data($_POST['phone']);
        if(!preg_match("/^[0-9]*$/", $phone)){
            $phone_err = "0-9 digits allowed only";
        }
        else if(strlen($phone) != 11){
            $phone_err = "Phone number must be 11 digits";
        }
    }
    //url
    if(empty($_POST ['htadd'])){
        $htadd_err = "URL requried";
    }
    else{
        $htadd = input_data($_POST['htadd']);
        if(!filter_var($htadd,FILTER_VALIDATE_URL)) {
            $htadd_err = "Invalid web address";
        }
    }
    //username
    if(empty($_POST ['uname'])){
        $uname_err = "User Name requried";
    }
    else{
        $uname = input_data($_POST['uname']);
        if(!preg_match("/^[a-zA-z ]*+$/", $uname)) {
            $uname_err = "Only alphabet are allowed";
        }
    }
    //pass
    if(empty($_POST['pass'])){
        $pass_err = "Password is required";
    }
    else{
        $pass = input_data($_POST['pass']);
        if(!preg_match("/^[0-9a-zA-Z]*$/", $pass)){
            $pass_err = "Only alphabets & number are allowed";
        }
        else if(strlen($pass) != 8){
            $pass_err = "Password must be in 8 characters";
        }
    }
    //confirm pass
    if(empty($_POST['cpass'])){
        $cpass_err = "Re-type the password";
    }
    else{
        $cpass = input_data($_POST['cpass']);
        if($pass != $cpass){
            $cpass_err = "Password not matched";
        }
        else if(strlen($cpass) != 8){
            $cpass_err = "Password must be in 8 characters";
        }
    }
    //gender
    if(empty($_POST ['gender'])){
        $gender_err = "Select gender";
    }
    else{
        $gender = input_data($_POST['gender']);
    }
    //commentbox
    if(empty($_POST ['comment'])){
        $comment_err = "Fill up this field";
    }
    else{
        $comment = input_data($_POST['comment']);
    }
    //areacode
    if(empty($_POST ['areacode'])){
        $areacode_err = "Empty";
    }
    else{
        $areacode = input_data($_POST['areacode']);
        if(strlen($areacode) != 4){
            $areacode_err = "Areacode must be 4 digits";
        }
    }
}

function input_data($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>





<!DOCTYPE html>
<html>
<head>
    <h1>Registration</h1>

<body> 
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
        <tr>
            <td>
                <fieldset style="width:550px">
                    <legend>General Information</legend>
                    <p><strong>First Name:</strong> <input type="text" name="fname" placeholder="First Name"></p>
                    <span class = "error"><?php echo $fname_err;?></span>
                  
                    <br>
                    
                    <p><strong>Last Name:</strong><input type="text" name="lname" placeholder="Last Name"></p>
                    <span class = "error"><?php echo $lname_err;?></span>
                    <br>
                    <p><strong>Father's Name:</strong><input type="text" name="faname" placeholder="Father's Name"></p>
                    <span class = "error"><?php echo $faname_err;?></span>
                    <br>
                    <input type="file" name="" value="" style="float:right">
                    
                    <p><strong>Mother's Name:</strong><input type="text" name="maname" placeholder="Mother's Name"></p>
                    <span class = "error"><?php echo $maname_err;?></span>
                    <br>

                    <p><strong>Gender:   </strong><input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female </p>
                    <span class = "error"><?php echo $gender_err;?></span>

                    <br>
                    <p><strong>Blood Group:</strong><select name="blood" >
                        <option disabled>Select</option> 
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</B-></option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select></p>
                    <br>
                    <p><strong>Religion:</strong>
                    <select name="religion" >
                        <option disabled>Select</option>
                        <option>Islam</option>
                        <option>Hindu</option>
                        <option>Others</option>
                    </select></p>
                </fieldset>
            </td>
            <td>
                <fieldset style="width: 350px;">
                    <legend>Contact Information</legend>
                    <p><strong>Email:</strong><input type="email" name="email" placeholder="Provide your email"></p>
                    <span class = "error"><?php echo $email_err;?></span>

                    <p><strong>Phone/Mobile:</strong><input type="number" name="phone" placeholder="Phone Number"></p>
                    <span class = "error"><?php echo $phone_err;?></span>

                    <p><strong>Website:</strong><input type="url" name="htadd" placeholder="Provide Web address"></p>
                    <span class = "error"><?php echo $htadd_err;?></span>

                    <p><strong>Address:</strong>

                    <fieldset style="width: 190px;">
            <legend>Present Address</legend>
            <p><select name="country" >
                <option disabled>Select</option> 
                <option>Bangladesh</option>
                <option>India</option>
                <option>USA</option>
            </select>
            <select name="district" >
                <option disabled>Select</option> 
                <option>Dhaka</option>
                <option>Chittagong</option>
                <option>Sylhet</option>
                <option>Delhi</option>
                <option>Mumbai</option>
                <option>New york</option>
            </select></p>

            <p><textarea rows="5" name="comment" placeholder="Road/Street/House"></textarea></p>
            <span class = "error"><?php echo $comment_err;?></span>

            <p><input type="number" name="areacode" placeholder="4 digit areacode"></p>
            <span class = "error"><?php echo $areacode_err;?></span>     
        </fieldset>

                
                </fieldset>
            </td>
            <td>
                <fieldset>
                    <legend>Account information</legend>
                    <p><strong>UserName:</strong> <input type="text" name="uname" placeholder="UserName"></p>
                    <span class = "error"><?php echo $uname_err;?></span>

                    <br>
                    <p><strong>Password:</strong> <input type="password" name="pass" placeholder="Password"></p>
                    <span class = "error"><?php echo $pass_err;?></span>
                    <br>
                    <p><strong>Confirm Password:</strong> <input type="password" name="cpass" placeholder="ConfirmPassword"></p>
                    <span class = "error"><?php echo $cpass_err;?></span>

                    <br>

                </fieldset>
            </td>
        </tr>
    </table>
    
    <br>
    <input type="submit" name="submit" value="Register">
    </form>
</body>



<?php

if(isset($_POST['submit'])){
    if($fname_err == "" && $lname_err == "" && $faname_err == "" && $maname_err == "" && 
    $email_err == "" && $phone_err == "" && $htadd_err == "" && $uname_err == "" &&
    $pass_err == "" && $cpass_err == "" && $gender_err == "" && $comment_err == "" && $areacode_err == "")
    {

    header("Location: welcome.php");
    
}
}

?>
</head>
</html>





