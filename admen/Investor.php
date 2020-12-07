<!DOCTYPE html>
<html>
    <head>
        <title>
            Investor
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"   type="text/css" href="investor.css">
        <script src="investor.js" type="text/javascript" language="javascript"></script>
    </head>
    <body>
        <!--form for logging in-->
        <form class="login_form" id="log_in"> 
         <label>User Name</label>
         <input type="text" id="User" placeholder="Enter Your user name" onkeypress="backgroundColor();"></br>  
         <label>Password</label>
         <input type="password" id="User_Password" placeholder="Enter Your Password"></br>
         
         <button type="button">Log In</button><br>
         <button type="button" onclick="CreateAccount()">Create New Account</button>
         <button type="button" onclick="RetreiveAccount()">Forgot User name or Password</button>
        </form>
        <!--Form for creating an account-->
        <form id="account"> 
         <label>User Name</label>
         <input type="text" id="User" placeholder="Enter Your user name"></br>  
         <label>Password</label>
         <input type="text" id="User_Password" placeholder="Enter Your Password"></br>
         <label>Password</label>
         <input type="text" id="User_Password" placeholder="Confirm Your Password"></br>
         <label>Email Address</label>
         <input type="email" placeholder="example@gmail.com"/>
         <input type="submit" value="Submit" class="submit"/>
        </form>

        <!--form for retrieving   credentials.-->
        <form id="Retrieve_account"> 
         <label>Enter User name or Password:</label><br/>
         <label>User Name</label>
         <input type="text" id="User" placeholder="Enter Your user name"></br>  
         <label>Password</label>
         <input type="text" id="User_Password" placeholder="Enter Your Password"></br>
         <label>Password</label>
         <input type="text" id="User_Password" placeholder="Confirm Your Password"></br>
         <label>Email Address</label>
         <input type="email" placeholder="example@gmail.com"/>
         <input type="submit" value="Submit" class="submit"/>


    </body>
</html>