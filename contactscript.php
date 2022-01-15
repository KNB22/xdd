<?php
   
    extract($_POST);
    include('database.php');
   
    $query = "insert into inquiry(name, emailid, phoneno, message, createdate)values
	('$name','$emailid','$phoneno','$message',NOW())";
	$result = mysqli_query($mysqli,$query) or die(mysqli_error());
   
    $header = "From: dipak@adctechno.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
	$header.= "X-Priority: 1\r\n"; 

	$to 	 =  "dipak@adctechno.com";
	$subject = "Inquiry From Ved PVC Wall";

	$txt = "<table width='800' border='1' cellspacing='0' cellpadding='8' bordercolor='#CCCCCC'>      
                <tr>        
                      <td colspan='2' bgcolor='#CDD9F5'><strong>You have received new inquiry from website with following details</strong></td>               
                </tr> 
                <tr>        
                    <td width='168' bgcolor='#FFFFEC'><strong>Name :</strong></td>        
                    <td width='290' bgcolor='#FFFFEC'>$name</td>      
                </tr>      
                <tr>        
                    <td bgcolor='#FFFFDD'><strong>E-mail ID</strong></td>        
                    <td bgcolor='#FFFFDD'>$emailid</td>      
                </tr>
                <tr>        
                    <td bgcolor='#FFFFDD'><strong>Mobile No. :</strong></td>        
                    <td bgcolor='#FFFFDD'>$phoneno</td>      
                </tr>
        		<tr>        
                    <td bgcolor='#FFFFDD'><strong>Message :</strong></td>        
                    <td bgcolor='#FFFFDD'>$message</td>      
                </tr> 
             </table>
			<br>Thanks & Regards,<br>Team Concept Digital Technology";
	mail($to,$subject,$txt,$header);
	
    $header = "From: dipak@adctechno.com\r\n"; 
	$header.= "MIME-Version: 1.0\r\n"; 
	$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
	$header.= "X-Priority: 1\r\n"; 

	$to 	 =  "eknath.shivale@gmail.com";
	$subject = "Inquiry From Adc Technologies";

	$txt = "<table width='800' border='1' cellspacing='0' cellpadding='8' bordercolor='#CCCCCC'>      
                <tr>        
                      <td colspan='2' bgcolor='#CDD9F5'><strong>You have received new inquiry from website with following details</strong></td>               
                </tr> 
                <tr>        
                    <td width='168' bgcolor='#FFFFEC'><strong>Name :</strong></td>        
                    <td width='290' bgcolor='#FFFFEC'>$name</td>      
                </tr>      
                <tr>        
                    <td bgcolor='#FFFFDD'><strong>E-mail ID</strong></td>        
                    <td bgcolor='#FFFFDD'>$emailid</td>      
                </tr>
                <tr>        
                    <td bgcolor='#FFFFDD'><strong>Mobile No. :</strong></td>        
                    <td bgcolor='#FFFFDD'>$phoneno</td>      
                </tr>
        		<tr>        
                    <td bgcolor='#FFFFDD'><strong>Message :</strong></td>        
                    <td bgcolor='#FFFFDD'>$message</td>      
                </tr> 
             </table>
			<br>Thanks & Regards,<br>Team Adc Technologies";
	mail($to,$subject,$txt,$header);
	
	header('location:thank-you.php');	
   
?>