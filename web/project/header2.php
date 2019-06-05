<?php echo '
      <div class="topnav">
        <div class="sidebar"></div>
        <a href="dashboard.php">Dashboard</a>
        <a href="contacts.php">Contacts</a>
        <a href="newContact.php">New Contact</a>
        <div class="search-container">
            <form action="searchResults.php" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
      </div>
    ';
?>