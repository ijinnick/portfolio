<?php
    $project = $_POST['id'];
    if(isset($project)){
        switch($project){
            case 'wago':
                $title = 'Wagopia e-commerce web application';
                $description = '';
            break;
            case 'obrats':
                $title = 'Online Bus Reservation and Tracking Systen';
                $description = '';
            break;
            case 'timelog':
                $title = 'Time Keeping and Food Monitoring System';
                $description = '';
            break;
            case 'amped':
                $title = 'Amped Wireless promotions module add-on';
                $description = '';
            break;
            case 'bouqs':
                $title = 'Bouqs customer care text response for email';
                $description = '';
            break;
            case 'bootstrap':
                $title = 'Sample web design using bootstrap 3';
                $description = '';
            break;
            case 'wordpress':
                $title = 'Sample blog site using wordpress';
                $description = '';
            break;
            default:
            break;
        }
    }
?>
    <h3 class="center"><?php echo $title ?></h3>
    <div class="image-content">
        <img src="<?php echo $site_url ?>/images/<?php echo $project ?>-actual.png">
    </div>
    <p><?php echo $description ?></p>
    <div class="close"><img src="<?php echo $site_url ?>/images/close-button.png"></div>