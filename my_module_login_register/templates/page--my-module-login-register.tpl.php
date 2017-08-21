<?php

/**
 * @file
 * Default theme implementation to display the custom login form block.
 *
 * @ingroup themeable
 */
?>
<h2><?php print t('Login'); ?></h2>    
<div id="lgn-wrp" class="form-wrapper">
  <?php print $login ?>
</div>
<h2><?php print t('No account? Register now'); ?></h2>  
<div id="reg-wrap" class="form-wrapper">
  <?php print $register ?>
</div>
