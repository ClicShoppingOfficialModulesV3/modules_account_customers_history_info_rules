<?php
  use ClicShopping\OM\CLICSHOPPING;
?>
<div class="col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
    <script type="text/javascript"><!--
      function popupImageWindow(url) {
        window.open(url,'popupImageWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=600,height=600,screenX=150,screenY=150,top=150,left=150')
      }
//--></script>

  <div class="card">
    <div class="card-header">
      <div class="row">
        <div class="moduleAccountCustomersHistoryInfoHeadingOrderConditionsOfSales"><h3><?php echo CLICSHOPPING::getDef('module_account_customers_history_info_heading_order_rules_conditions_of_sales'); ?></h3></div>
      </div>
    </div>
    <div class="card-block">
      <div class="card-text">
        <div class="separator"></div>
        <i class="fas fa-arrow-right"></i>&nbsp;
        <?php echo '<a href="javascript:popupImageWindow(\'' . 'index.php?Account&OrderConditions&order_id='. $info_link.'\')">' . CLICSHOPPING::getDef('module_account_customers_history_info_rules_text_condition_general_of_sales') . '</a>'; ?>
      </div>
    </div>
  </div>
</div>