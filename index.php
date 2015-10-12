<?php
    $site_url = "http://$_SERVER[HTTP_HOST]";
    
    #keeps users from requesting any file they want
    $safe_pages = array("home","about","contact");
    $active_page = 'home';
    if(isset($_GET['content']) ) {
        
        if(in_array($_GET['content'], $safe_pages)){
            $active_page = $_GET['content'];
            switch($_GET['content']){
                case 'home':
                    $title = 'Home Page';
                    include_once('includes/header.php');
                    include_once('content/main.php');
                    break;
                case 'about':
                    $title = 'About';
                    include_once('includes/header.php');
                    include_once('content/about.php');
                    break;
                case 'contact':
                    $title = 'Contact';
                    include_once('includes/header.php');
                    include_once('content/contact.php');
                    break;
                default:
                    $title = '404 Error Page Not Found';
                    include_once('includes/header.php');
                    include_once('page/404.php');
            }
        
        }else{
            $title = '404 Error Page Not Found';
            include_once('includes/header.php');
            include_once('page/404.php'); 
        }
    } else {
        $title = 'Home';
        include_once('includes/header.php');
        include_once('content/main.php');
    }
    include_once('includes/footer.php');
?>