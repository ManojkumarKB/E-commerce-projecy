<div class="navbar navbar-inverse navbar-fixed-top">    
     <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">   
                          <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                                <span class="icon-bar"></span>
                    </button> 
                <a class="navbar-brand" href="../index/index.php">Lifestyle Store</a>  
                   </div>   
          <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right"> 
              <?php       
              if (isset($_SESSION['id']))
               {
                     ?>
            <li><a href = "../cart/cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>   
                              <li><a href = "../settings/setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>   
               <li><a href = "../logout/logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>                                       
<?php 
     } else {           
                   ?>    
                   <li><a href="../signup/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>   
                    <li><a href="../login/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php               
            } 
             ?> 
      </ul>        
 </div>
</div>
 </div> 
 
  