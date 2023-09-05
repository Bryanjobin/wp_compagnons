<?php 
$args = wp_parse_args($args, array(
    "title" => '',
    "desc" => '',
    "date" => '',
    "jour" => '',
    "lieu" => '',
    "heure" => '',
    "prix" => '', 
    "billeterie" => '',
    "image_url" => '',
    "image_alt" => ''
));
?>

<div class="eventCard">
    <div class="eventCard_container">
        <div class="eventCard_infoBox">
            <div class="eventCard_infoBox_date">
                <p class="eventCard_infoBox_date_day"><?php echo $args['jour']?></p>
                <p class="eventCard_infoBox_date_date"><?php echo $args['date']?></p>
            </div>
            <div class="eventCard_infoBox_info">
                <div class="eventCard_infoBox_info_container">
                    <div class="eventCard_infoBox_info_container_placeNPrice">
                            <p><?php echo $args['lieu']?></p>
                        <p><?php echo $args['heure']?> / <?php echo $args['prix']?></p>
                    </div>
                    <p  class="eventCard_infoBox_info_container_desc"><?php echo $args['desc']?></p>
                </div>
                <div class="eventCard_infoBox_info_buttonContainer">
                    <button class="eventCard_infoBox_info_button btn-link bg-white"><a href="<?php echo $args['billeterie']?>" class="btn_default" target="_blank">Acheter des billets </a><span class="material-symbols-outlined eventCard_infoBox_info_button_icon">arrow_right_alt</span></button>                                
                </div>
            </div>
        </div>
        <div class="eventCard_photoBox">
            <img src="<?php echo $args['image_url']?>" alt="<?php echo $args['image_alt']?>">
        </div>
    </div>
    <div class="eventCard_titleBox">
        <p class="btn_default"><?php echo $args['title']?></p>
    </div>
</div>