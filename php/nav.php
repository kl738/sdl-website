<header class="header">
  <div role="navigation" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header"><a href="index.php" class="navbar-brand">SDL</a>
        <div class="navbar-buttons">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
        </div>
      </div>
      <div id="navigation" class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li <?php if ($activePage =="home") {?>class="active" <?php } ?>><a href="index.php">Home</a></li>
          <li <?php if ($activePage =="research") {?>class="active" <?php } ?>><a href="research.php">Research</a></li>
          <li <?php if ($activePage =="publications") {?>class="active" <?php } ?>><a href="publications.php">Publications</a></li>
          <li <?php if ($activePage =="members") {?>class="active" <?php } ?>><a href="members.php">Lab Members</a></li>
          <li <?php if ($activePage =="contact") {?>class="active" <?php } ?>><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>