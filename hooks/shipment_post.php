<?php
function hook_shipment_post(&$user,&$shipment)
{
  if($shipment->service == 'ND')
  {
     $contact = 'Dispatch @ TIMAX';
     $shipment->ship_email = 'dispatch@timax.com';
  }
  else
     $contact = $shipment->ship_contact;  
 
  if(trim($shipment->ship_email) == '')
    return;

  $mailer = new Mailer($user['folder']);
  $mailer->addRcpt($contact,$shipment->ship_email);
  $mailer->dataObj  = $shipment->toArray();

  switch($shipment->service)
  {
     case 'NF':
       $mailer->template = "quote_notification_nfo";
       $mailer->subject  = "NEW QUOTE #".$shipment->ext_id;
     break;

     case 'ND':
       $mailer->template = "quote_notification_nd";
       $mailer->subject = "NEW QUOTE ND #".$shipment->ext_id;
     break;

     case 'ONL':
     case 'SDL':
     case 'RSL':
     case 'EXP':
       if($shipment->equipment == '53v2')
       {
         $mailer->template = "quote_summary";
	 $mailer->subject  = "NEW QUOTE #".$shipment->ext_id;
       }
       else
       {
	 $mailer->template = "order_summary";
	 $mailer->subject  = "NEW SHIPMENT #".$shipment->ext_id;
       }
     break;

     default:
       $mailer->template = "order_summary";
       $mailer->subject  = "NEW SHIPMENT #".$shipment->ext_id;
     break;
  }
  if($shipment->division != 'CUR')
    $mailer->send();
}
?>
