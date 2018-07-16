<?php
/*
 * order_condition.php
 * @copyright Copyright 2008 - http://www.innov-concept.com
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 License & MIT Licencse

*/

  use ClicShopping\OM\Registry;

  $CLICSHOPPING_Page = Registry::get('Site')->getPage();
?>

<html dir="ltr" lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo 'Conditions of sales'; ?></title>
  </head>
  <body onload="resize();">
    <?php echo $QconditionGeneralOfSales->value('page_manager_general_condition'); ?>
  </body>
</html>

