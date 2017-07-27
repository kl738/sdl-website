<footer>
  <hr/>
  <div class="footer">
    <div class="navbar-default">
      <div class="container">
        <ul class="nav navbar-nav">
                <li <?php if ($activePage =="home") {?>class="active" <?php } ?>><a href="index.php">Home</a></li>
                <li <?php if ($activePage =="research") {?>class="active" <?php } ?>><a href="research.php">Research</a></li>
                <li <?php if ($activePage =="publications") {?>class="active" <?php } ?>><a href="publications.php">Publications</a></li>
                <li <?php if ($activePage =="members") {?>class="active" <?php } ?>><a href="members.php">Lab Members</a></li>
                <li <?php if ($activePage =="events") {?>class="active" <?php } ?>><a href="events.php">Events</a></li>
                <li <?php if ($activePage =="contact") {?>class="active" <?php } ?>><a href="contact.php">Contact</a></li>
                <?php if(isset($_SESSION["user"])){?>
      
                      <li><a href="logout.php">Log Out</a></li>
      
                      <?php }else{ ?>
      
                      <li><a href="login.php">Login</a></li>

                <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</footer>