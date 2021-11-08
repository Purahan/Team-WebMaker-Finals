<?php
error_reporting(E_ALL);
session_start();
include('db-con.php');

function page_header() {
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Bootstrap CSS file -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Font Styles -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;900&display=swap">

        <!-- Icons files -->
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/525fd5b530.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>

        <!-- Bootstrap JS files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

        <!-- JQUERY JS File -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Theme CSS file -->
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Experimento</title>
    </head>
    <body>
<?php
}

function page_footer($showLinks=true) {
?>
        <!-- Footer (: -->
        <?php if($showLinks) { ?>
        <footer class="footer border-top border-2">
            <div class="footer__container container container--px flex">
            <div class="footer__header flex">
                <a href="#" class="footer__brand" title="Back to the homepage">Experimento</a>
    
                <div class="footer__social-icons social-icons flex">
                
                <a href="#" class="social-icons__link social-icons__link--facebook">
                    <i class='bi bi-facebook'></i>
                    <span class="visually-hidden">Facebook</span>
                </a>
                <a href="#" class="social-icons__link social-icons__link--twitter">
                    <i class='bx bxl-twitter' ></i>
                    <span class="visually-hidden">Twitter</span>
                </a>
                <a href="#" class="social-icons__link social-icons__link--youtube">
                    <i class='bx bxl-youtube' ></i>
                    <span class="visually-hidden">YouTube</span>
                </a>
                </div>
            </div>
    
            <nav class="footer__inner flex">
                <ul class="footer__list list" role="menu">
                <h3 class="list__title">Something</h3>
        
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                </ul>
                <ul class="footer__list list" role="menu">
                <h3 class="list__title">Something</h3>
        
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                </ul>
                <ul class="footer__list list" role="menu">
                <h3 class="list__title">Something</h3>
        
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                </ul>
                <ul class="footer__list list" role="menu">
                <h3 class="list__title">Something</h3>
        
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                <li class="list__item" role="none">
                    <a href="#" class="list__link" role="menuitem">Something</a>
                </li>
                </ul>
            </nav>      
            </div>
        </footer>
        <?php } ?>
        <?php
        if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') !== false) {?>
        <!-- Theme JS File -->
        <script src="assets/js/script.js"></script>
        <?php }?>
    </body>
</html>
<?php
}

function nav_bar($showBackButton=false) {
    $headerClass = "";
    $homeFile = "";

    if(!isset($_SESSION["id"]) === true) {
        include('includes/sign-in-modal.php');
        include('includes/sign-up-modal.php');
    }
    if(strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
        $headerClass='header--active';
        $homeFile = "index.php";
    }
?>
    <!-- Header -->
    <header id="header" class="header <?=$headerClass?>">
        <div class="header__container container container--px">
            <nav id="nav" class="navbar flex">
                <?php if($showBackButton) { ?>
                <a href="list.php"><i class="fas fa-chevron-left me-1"></i>Back</a>
                <?php } ?>
                <a href="#" class="navbar__brand" title="Back to the homepage">Experimento</a>
        
                <button id="toggleMenuBtn" class="navbar__toggle-menu toggle-menu" type="button" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="toggle-menu__hamburger hamburger" aria-hidden="true">
                        <div class="hamburger__item"></div>
                        <div class="hamburger__item"></div>
                        <div class="hamburger__item"></div>
                    </div>
                </button>
        
                <ul id="menuList" class="navbar__menu menu" role="menu">
                    <li class="menu__item" role="none">
                        <a href="<?=$homeFile?>#hero" class="menu__link" role="menuitem">Home</a>
                    </li>
                    <li class="menu__item" role="none">
                        <a href="<?=$homeFile?>#about" class="menu__link" role="menuitem">About</a>
                    </li>
                    <li class="menu__item" role="none">
                        <a href="<?=$homeFile?>#features" class="menu__link" role="menuitem">Features</a>
                    </li>
                    <li class="menu__item" role="none">
                        <a href="<?=$homeFile?>#testimonial" class="menu__link" role="menuitem">Testimonials</a>
                    </li>
                    <li class="menu__item" role="none">
                        <a href="<?=$homeFile?>#support" class="menu__link" role="menuitem">Support</a>
                    </li>
                    <?php
                        if(!isset($_SESSION['id'])){
                            echo '
                            <li class="menu__item" role="none">
                                <a href="#" class="menu__link cta cta--primary px-3 py-3 cta--primary-outline" role="menuitem" data-bs-toggle="modal" data-bs-target="#modal-signin"><i class="bi bi-person-fill"></i> Login</a>
                            </li>

                            <li class="menu__item" role="none">
                                <a href="#" class="menu__link cta cta--primary px-3 py-3" role="menuitem" data-bs-toggle="modal" data-bs-target="#modal-signup">Register</a>
                            </li>
                            ';
                        }
                        else {
                            echo '
                            <li class="menu__item" role="none">
                                <a href="list.php" class="menu__link" role="menuitem">Experiments</a>
                            </li>
    
                            <li class="menu__item" role="none">
                                <a href="profile.php" class="menu__link" role="menuitem">Profile</a>
                            </li>
    
                            <li class="menu__item" role="none">
                                <a href="log-out.php" class="menu__link" role="menuitem">Logout</a>
                            </li>
                            ';
                        }
                    ?>
                </ul>
            </nav>
            <div id="overlayLayer" class="header__overlay"></div>
        </div>
    </header>

<?php
}

?>