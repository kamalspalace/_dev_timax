<?php
function hook_login_post(&$user,&$session,&$return)
{
	$degama    = new IntegrationHandler($user);
        $handshake = $degama->process_request("handshake");
        
        $status    = intval($handshake->status);
        if ($status) {
            $session->bill_to_code  = (string)$handshake->bill_to_code;
            $session->bill_company  = (string)$handshake->Name;
            $session->bill_contact  = (string)$handshake->Contact2;
            $session->bill_address  = (string)$handshake->Address;
            $session->bill_city     = (string)$handshake->City;
            $session->bill_province = (string)$handshake->Province;

            // #43 Default shipper postal code fix
            if(strlen(trim((string)$handshake->Postal)) == 7)
                $session->bill_postal = substr((string)$handshake->Postal,0,3).substr((string)$handshake->Postal,4,3);
            else
                $session->bill_postal = (string)$handshake->Postal;

            $session->bill_phone    = (string)$handshake->Phone;            
        } else {
            $session->status = $status;
        }
}
?>
