<!DOCTYPE html>
<html>
    <head>
        <title>
            Remove Service 
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"   type="text/css" href="createNewService.css">
        <script src="createNewService.js" type="text/javascript" language="javascript"></script>
    </head>
    <body>
        <!--form for logging in-->
        <form class="new_service" id="new_service"> 
         <label>Service  Category</label>
         <select>
             <option>Education</option>
             <option>Banking</option>
             <option>Marketing</option>
             <option>Sales</option>
             <option>Medicine</option>
             <option>Hospitality</option>
             <option>Tourism</option>
             <option>Building</option>
             <option>Transport</option>
         </select>
         <label>Service  Name</label>
         <input type="text" id="Service_name" placeholder="Enter Service Name">
         <label>Service Location</label>
         <input type="text" id="Service_location" placeholder="Enter Service Location"><br>
         <label>Service Phone number</label>
         <input type="text" id="Service Phone Number" placeholder="Enter your Phone Number">
         <label>Service Email Address</label>
         <input type="email" id="Service_email" placeholder="example@gmail.com"><br/>
         <input type="submit" value="Submit" class ="submit">
        </form>

       

    </body>
</html>