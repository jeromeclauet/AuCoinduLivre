<header class="img-fluid mb-n2">
    <h1>Au Coin du Livre</h1>
</header>
    <nav class="navbar navbar-expand-lg  navbar-dark stickyNav nav_background">
        <a class="navbar-brand d-md-none" href="#">Accueil</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center nav_background" id="navbarSupportedContent">
            <ul id="navUl" class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../view/Accueil.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/Romans.php">Romans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/Société.php">Société</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/Histoire.php">Histoire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../view/Sports.php">Sports</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mon compte
                </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php if(isset($_SESSION['profile']['role'])){ 
                    if($_SESSION['profile']['role'] == '1'){ ?>
                        <a class="dropdown-item" href="../view/dashboardIndex.php">Tableau de bord</a>
                        <a class="dropdown-item" href="Accueil.php?action=disconnect">Déconnexion</a> 
                    <?php }else{ ?>                        
                    <a class="dropdown-item" href="Accueil.php?action=disconnect">Profil</a>
                    <a class="dropdown-item" href="Accueil.php?action=disconnect">Déconnexion</a>
                    <?php } ?>
                <?php }else{ ?>                
                    <a class="dropdown-item" href="Login.php?view=login">Connexion</a>
                    <a class="dropdown-item" href="Register.php?view=register">Inscription</a>
            <?php } ?>    
            </div>
                </li>      
            </ul>
        </div>
    </nav>