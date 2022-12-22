<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT

 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

use ClicShopping\OM\CLICSHOPPING;
?>
<div class="col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
    <script>
      function popupImageWindow(url) {
        window.open(url,'popupImageWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=600,height=600,screenX=150,screenY=150,top=150,left=150')
      }
    </script>

  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="moduleAccountCustomersHistoryInfoHeadingOrderConditionsOfSales"><h3><?php echo CLICSHOPPING::getDef('module_account_customers_history_info_heading_order_rules_conditions_of_sales'); ?></h3></div>
      </div>
    </div>
    <div class="card-block">
      <div class="separator"></div>
      <div class="card-text">
        <div class="separator"></div>
        <i class="bi bi-arrow-right"></i>&nbsp;
        <?php echo '<a href="javascript:popupImageWindow(\'' . 'index.php?Account&OrderConditions&order_id='. $info_link.'\')">' . CLICSHOPPING::getDef('module_account_customers_history_info_rules_text_condition_general_of_sales') . '</a>'; ?>
      </div>
    </div>
  </div>
</div>
