<?php
/**
*	GNU AFFERO GENERAL PUBLIC LICENSE 
*	   Version 3, 19 November 2007
* This software is licensed under the GNU AGPL Version 3
* 	(see the file LICENSE for details)
*/
?>
<?php
    print "<span>Total current modified amount: $" . custom_number_formatter_format($node->data[0]['total_current_modified_budget_amount'],2)."</span><br/>";
    print "<span>Total adopted budget amount: $" . custom_number_formatter_format($node->data[0]['total_adopted_amount'],2)."</span>";
?>