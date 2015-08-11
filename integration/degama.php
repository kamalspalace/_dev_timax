<?php

class ClientIntegrationHandler
{
	var $user;
	var $action;
	
	function __construct($user, $action)
	{
		$this->user = $user;
		$this->action = $action;
	}
	
	function handle_integration(&$data, &$return)
	{
		$action = $this->action;
		return $this->$action($data, $return);
	}
	
	function rate_request(&$data, &$return)
	{
		return true;
	}
	
	function quote_to_order(&$data, &$return)
	{
		/*
		if($data['shipon_shipment_service'] == 10) //Next flight out
		{
			$this->send_email("jjtrottier@jtec.ca", "Next Flight Out", $data);
			
			return false;
		}
		else
			return true;
		*/
		return true;
	}
	
	function handshake(&$data, &$return)
	{
		return true;
	}

	function order_details_request(&$data, &$return)
	{
		return true;
	}
	
	function tracking_list_request(&$data, &$return)
	{
		return true;
	}
	
	function tracking_details_request(&$data, &$return)
	{
		return true;
	}

	function send_email($email, $service, &$data)
	{
		$headers = "From: Timax Online\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = "
		<html>	
			<body>	
				<table align='center'	
							style='	
									border-right: solid 2px #36301f;
									border-left: solid 2px #36301f;
									border-collapse: collapse;
								  '	
				>	
					<tr>	
						<td colspan='3'	
							style='	
										width:350px;	
										text-align: center;	
										margin: 0 auto;	
										font-size: 14px;	
										font-weight: bold;
										color: #36301f;
										border: 2px solid #36301f;	
										background: #beb077;	
										padding: 7px;	
								  '	
						>
							You have recieved a new pick up request	
						</td>
					</tr>
	
					<tr style='background: #EEE'> 	 <td>Service:   </td> <td colspan='2'> ".$service."  </td> </tr>
					<tr style='background: #D3CEBF'> <td>Name:      </td> <td colspan='2'> ".$data['shipper']['name']."     </td> </tr>	
					<tr style='background: #EEE'> 	 <td>Contact:   </td> <td colspan='2'> ".$data['shipper']['contact']."  </td> </tr>	
					<tr style='background: #D3CEBF'> <td>Phone:     </td> <td> 			   ".$data['shipper']['phone']."    </td> <td>Ext.: ".$data['shipper']['ext']." </td> </tr>	
					<tr style='background: #EEE'> 	 <td>Email:     </td> <td colspan='2'> ".$data['shipper']['email']."    </td> </tr>	
					<tr style='background: #D3CEBF'> <td>Street 1:  </td> <td colspan='2'> ".$data['shipper']['street1']."  </td> </tr>	
					<tr style='background: #EEE'> 	 <td>Street 2:  </td> <td colspan='2'> ".$data['shipper']['street2']."  </td> </tr>	
					<tr style='background: #D3CEBF'> <td>City:      </td> <td colspan='2'> ".$data['shipper']['city']."     </td> </tr>	
					<tr style='background: #EEE'> 	 <td>Province:  </td> <td colspan='2'> ".$data['shipper']['province']." </td> </tr>	
					<tr style='background: #D3CEBF'> <td>Country:   </td> <td>             ".$data['shipper']['country']." </td> <td>Postal: ".$data['shipper']['postal']." </td> </tr>	
					
					<tr style='background: #EEE'> <td> &nbsp; </td> <td> &nbsp; </td> <td> &nbsp; </td>  </tr>	
	
					<tr style='background: #D3CEBF'> <td>Pickup Date:      </td> <td> ".$data['shipon_pickup_date']."</td> <td>Time: ".$data['shipon_pickup_ready']." </td> </tr>					
		
					<tr style='	
									width:300px;	
									text-align: center;	
									margin: 0 auto;	
									font-size: 14px;	
									font-weight: bold;	
									color: #36301f;
									border: 2px solid #36301f;	
									background: #beb077;
									padding: 7px;
									text-align: center;
								'	
					>	
						<td colspan='3'> Click <a href='http://www.gotimax.com/bol.php?token=".$data['token']."'> HERE </a> to view the Waybill  </td>  </tr>	
				</table>	
			</body>
		</html>	
		";
	
		mail($email, "New Shipment: ".$service." (".$data['shipper']['name'].")", $message, $headers);
	}
        
	function get_location_request(&$data, &$return)
	{
		return true;
	}

}

?>
