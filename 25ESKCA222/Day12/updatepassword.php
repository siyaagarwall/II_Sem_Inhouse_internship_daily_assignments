<?php
include("db_connect.php");
include("dashboardheader.php");
include("dashboardverticalcontent.php");
include("checkupdateerror.php");
?>
<div class="container mt-5" style=max-widht:"200px">
<form action="" method = "post">
        <h3 class="mb-3">Update Password</h3>
        
        
        <input type="password" class="form-control mb-3" name="oldpassword" placeholder="Old password" >
        <input type="password" class="form-control mb-3" name="newpassword" placeholder="New Password">
        <input type="password" class="form-control mb-3" name="confirmpassword" placeholder="Confirm Password">
       
        <button  class="btn btn-primary w-100 ">Update</button>
        

    </form>
</div>
<?php 
include("dashboardfooter.php");
include("footer.php");?>
