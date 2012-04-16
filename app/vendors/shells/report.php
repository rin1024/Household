<?php
/**
 * 独自のコマンドライン
 * $ cake report 
 */
class ReportShell extends Shell {
  var $uses = array('Order');
  function main() {
    //Get orders shipped in the last    month
    $month_ago = date('Y-m-d H:i:s',    strtotime('-1 month'));
    $orders = $this->Order->findAll("Order.shipped >= '$month_ago'");

    //Print out each order's information
    foreach($orders as $order) {
      $this->out('Order date: '.$order['created']."\n");
      $this->out('Amount: $'.number_format($order['amount'], 2)."\n");
      $this->out('----------------------------------------'."\n");

      $total += $order['amount'];
    }

    //Print out total for the selected orders
    $this->out("Total: $".number_format($total, 2)."\n"); 
  }
}
