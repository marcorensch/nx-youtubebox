<?php
/**
 * Printout File for nx-videoBox light 
 * @package     nx-videoBox light
 *
 * @copyright   Copyright (C) 2009 - 2016 nx-designs.
 * @license     GNU General Public License version 2 or later
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<div class="nx-videobox-outer" id="outer_<?php echo $rndm; ?>" style="position:relatve;" data-uk-check-display>
    <div class="nx-videobox-container<?php echo $moduleclass_sfx; ?>" style="position:relative;" >
        <?php echo $video; ?>
        <?php echo $blocklayer;?>
    </div>
</div>
<?php echo $positioning_calc; ?>
