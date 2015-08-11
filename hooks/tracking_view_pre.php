<?
function hook_tracking_view_pre(&$data,&$user)
{

  // Check for existence of signature / pod img
  if($data['RecStatus'] == 'DEL' && isset($data['Signature']))
  {
    $json = trim(file_get_contents('http://www.gotimax.com/glob.php?pbnum='.$data['Pbnum']));

    if($json != 'false')
    {
      $data['hasSignature'] = true;
      $data['imgPods'] = str_replace('/home/timax/www/imgpod/','http://www.gotimax.com/imgpod/',json_decode($json)); // ugly
    }
  }
  
  // Fetch Courier tracking info (if necessary)
  if(isset($data['Reference2']))
  {
      // UPS
      if(substr(strtoupper((string)$data['Reference2']),0,2) == '1Z')
      {
        $trackingNo = explode('*',(string)$data['Reference2']);
        $shipOnline = new shiponlineHandler($user);
        $solResponse = $shipOnline->track(array('trackingNo' => $trackingNo[0]));
        $solResponse['events'] = array_reverse($solResponse['events']);
        unset($data['StatusLog']);
        $i = 0;


        if(! empty($solResponse['details']['signedBy']))
        {
          $data['hasSignature'] = true;
          $data['Signature'] = (string)$solResponse['details']['signedBy'];
          $data['imgPods'] = "data:image/gif;base64,".(string)$solResponse['details']['signatureImage'];
        }
        

        foreach($solResponse['events'] as $event)
        {
          $data['StatusLog']['Status'][$i]['Dt'] = (string)substr($event['timestamp'],0,10);
          $data['StatusLog']['Status'][$i]['Tm'] = (string)substr($event['timestamp'],-8);
          $data['StatusLog']['Status'][$i]['RecStatus'] = 'UPS';
          $data['StatusLog']['Status'][$i]['Remarks']  = (string)$event['description'];
          $data['StatusLog']['Status'][$i]['Location'] = (string)$event['location'].': ';

          if((string)$event['description'] == 'DELIVERED')
            $data['StatusLog']['Status'][$i]['DropLoc'] = (string)$solResponse['details']['signatureLocation'];
          $i++;
        }

        $i--;

        $data['RecStatus'] = ucwords(strtolower($data['StatusLog']['Status'][$i]['Remarks']));
      }
  }
}
?>
