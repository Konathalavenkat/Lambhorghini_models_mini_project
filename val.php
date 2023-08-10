<?php 
include('validation.php');
?>
<head><title>Registration Form Validation</title></head>
<style>
    body{
        background-image: url(bg.jpg);
        background-attachment: fixed;
        background-size: cover;
    }
    .container{
        display: grid;
        height: 100%;
        width: 100%;
    }
    .form{
        font-size: 24px;
        padding: 50px;
        margin-top: 150px;
        margin-left: 20px;
        position: fixed;
        background-color: rgba(60,60,60, 0.2);
        box-shadow: 10px 10px 10px black;
    }
    h1{
        text-align: center;
        color: orange;
        font-family: 'Times New Roman', Times, serif;
        text-transform: capitalize;
        font-size: 48px;
    }
</style>
<h1>Sign up/Register</h1>
<div class="container">
    <div class="main">
        <div class="form">
            <form>
                <?php echo $valid."<br><br>"; ?>
                First Name(Minimum 6 characters)<font color="red">* </font>
                <input type='text' name='first_name' /><br /><?php echo $fnameErr;?><br />
                Last Name<font color="red"><font color="red">* </font> </font> &nbsp;&nbsp;&nbsp;
                <input type='text' name='last_name' /><br /><?php echo $lnameErr;?><br />
                Email Address<font color="red">* </font> &nbsp;&nbsp;&nbsp;
                <input type='text' name='email' /><br /><?php echo $emailErr;?>
                <font color="red">(one e-mail id only):</font> &nbsp;&nbsp;&nbsp;
                <font color="redblue">e.g. smith@hotmail.com</font><br /><br/>
                Password(minimum 6 characters)<font color="red">* </font> &nbsp;&nbsp;&nbsp;
                <input type='password' name='pass'><br /><?php echo $passErr;?><br/>
                Confirm Password <input type="password" name='cpass'><br><?php echo $cpassErr?><br>
                Address<font color="red">* </font> &nbsp;&nbsp;&nbsp;
                <textarea rows="2" cols="20" name='addr' /></textarea> <br /><?php echo $addrErr;?> <br/>
                Mobile No<font color="red">* </font> &nbsp;&nbsp;&nbsp;
                <input type='text' name='mobileno' /><br />
                Gender: <input type='radio' name="gender">male
                <input type='radio' name="gender">female<br/><br />
                <input type='Submit' value='submit'/>
                <input type='Reset' value='reset'/>
                </form>
        </div>
    </div>
</div>
</body>