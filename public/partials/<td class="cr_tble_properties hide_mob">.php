<td class="cr_tble_properties hide_mob">
    <span class="filter hide">
        <?php echo $max_number_of_places; ?>
    </span> 
    <span class="hide">-</span> 
    <span class="filterche"> 
        <?php 
            if($max_number_of_places >= 0 && $max_number_of_places < 13) echo '≤12'; 
            elseif($max_number_of_places > 12 && $max_number_of_places < 19) echo '≤18';
            elseif($max_number_of_places > 18 && $max_number_of_places < 31) echo '≤30'; 
            elseif($max_number_of_places > 30) echo '≥31'; 
        ?>
    </span>
</td>

<td class="cr_tble_properties hide_mob velikost--value">
    <span class="filter hide">
        <?php echo $max_number_of_places; ?>
    </span>
    <span class="hide">-</span>
    <span class="filterche">
        <?php 
            if($max_number_of_places >= 0 && $max_number_of_places < 13) {
                echo '≤12';
            } elseif($max_number_of_places > 12 && $max_number_of_places < 19) {
                echo '≤18';
            } elseif($max_number_of_places > 18 && $max_number_of_places < 31) {
                echo '≤30';
            } elseif($max_number_of_places > 30) {
                echo '≥31';
            }
        ?>
    </span>
</td>