<?
    
    $deliveryAdress = 'recepcja@udina.pl';

    $noerrors = true;
    $haveRequest = false;
    
    if(!isset($_POST['name_surname'])){
	$noerrors = false;
	
    }else $haveRequest = true;
    
    if(!isset($_POST['phone'])){
	$noerrors = false;
	
    } else $haveRequest = true;
    
    if(!isset($_POST['email'])){
	$noerrors = false;
	
    } else $haveRequest = true;
    
    if(!isset($_POST['msg'])){
	$noerrors = false;
	
    } else $haveRequest = true;
    
    if($noerrors && $haveRequest){
	// Wysyłka maila 
	
	$to      = $deliveryAdress;
	$subject = 'Dokonanie rezerwacji';
	$message = 'Nowa prośba o dokonanie rezerwacji:<br /> Imię i nazwisko: '.$_POST['name_surname']. '<br /> Telefon: '.$_POST['phone']. '<br />';
	$message .= 'Email: '.$_POST['email']. '<br />';
	$message .= 'Wiadomość:<br /> '.$_POST['msg']. '<br />';
	
	$headers = 'From: strona@udina.pl' . "\r\n" .
	    'Reply-To: '.$_POST['email'] . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	mail($to, $subject, $message, $headers);
	
	
	echo '<p stlye="color: #ff3333;">Twoja wiadomość została wysłana</p>';
	
    }elseif(!$noerrors && $haveRequest){
	// Komunikat o blędzie
	
	echo '<p class="red">Wszystkie pola są wymagane</p>';
	
    }