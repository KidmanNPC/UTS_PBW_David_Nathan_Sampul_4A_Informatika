<header>
    <div class="container">
        <div class="header-content">
            <h1 class="logo">
                <i class="fas fa-laptop-code"></i> Nate Folio
            </h1>
            
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.php" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>
                        <i class="fas fa-home"></i> Home
                    </a></li>
                    
                    <li><a href="about.php" <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'class="active"' : ''; ?>>
                        <i class="fas fa-user"></i> About Me
                    </a></li>
                    
                    <li><a href="web-programming.php" <?php echo basename($_SERVER['PHP_SELF']) == 'web-programming.php' ? 'class="active"' : ''; ?>>
                        <i class="fas fa-code"></i> Web Programming
                    </a></li>
                    
                    <li><a href="contact.php" <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'class="active"' : ''; ?>>
                        <i class="fas fa-envelope"></i> Contact
                    </a></li>
                </ul>
                
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </div>
</header>