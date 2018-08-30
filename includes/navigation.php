<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
   
 <a href="index.php" class="navbar-left"><img src="images/logo.png" width="100" height="100" class="img rounded"></a>
   
    <a class="navbar-brand" href="index.php">Cuddly Care Clinic</a>
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
<!--
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
      </li>
-->
      
        <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Branches
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="jprizal.php">JP. Rizal Branch </a>
          <a class="dropdown-item" href="lilac.php">Parang Lilac Marikina</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./fullcalendar/demos/default.html">Appoint Now</a>
      </li>
       
     
       
       <li class="nav-item">
        <a class="nav-link text-right" href="form_signup.php">Sign Up</a>
      </li>
        
        
          
    </ul>

    
    
    <div>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1">Login</button>
    <br>
    </div>
    
    <div>
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Admin</button>
        <br>
        </div>
    
    
<!--
    <form class="form-inline my-2 my-lg-0" action="form_signup.php" method="post">
      <button class="btn btn-dark" type="button">Sign-Up</button>
    </form>
-->
        
  </div>
    
</nav>
    
    <!-- MODAL -->
    
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patience login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/login.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input class="form-control mr-sm-2" type="email" placeholder="email@example.com"  name="email">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input class="form-control mr-sm-2" type="password" placeholder="Enter Password"  name="password">
            <br>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    
    
    
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Administrator login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/login_admin.php" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input class="form-control mr-sm-2" type="email" placeholder="email@example.com"  name="email_admin">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input class="form-control mr-sm-2" type="password" placeholder="Enter Password"  name="password">
            <br>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login_admin">Login</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

