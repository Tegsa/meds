<?php

require_once('./config.php');


$q = $db->prepare("SELECT * FROM staff");
if($q && $q->execute()) {
    
    $result = $q->get_result();
    $staffList = array();
    while($staff = $result->fetch_assoc()) {
        
        $staffId = $staff['id'];
        $firstName = $staff['firstName'];
        $lastName = $staff['lastName'];
      
        $q = $db->prepare("SELECT * FROM appointment WHERE staff_id = ?");
       
        $q->bind_param("i", $staffId);
        if($q && $q->execute()) {
           
            $appointments = $q->get_result();
            $appointmentList = array();
            while($appointment = $appointments->fetch_assoc()) {
                
                $appointmentId = $appointment['id'];
                $appointmentDate = $appointment['date'];
               
                $appointmentTimestamp = strtotime($appointmentDate);
                $appointment = array("id"   =>    $appointmentId,
                                     "date" =>    $appointmentDate);
                array_push($appointmentList, $appointment);
                //wyświetl guzik
                //echo "<a href=\"patientLogin.php?id=$appointmentId\" style=\"margin:10px; display:block\">";
                //wyświetl termin w formacie dzień.miesiąc godzina:minuta)
                //echo date("j.m H:i", $appointmentTimestamp);
                //zamknij guzik
                //echo "</a>";
            }
            $staffMember = array(   "firstName"     => $firstName,
                                    "lastName"      => $lastName,
                                    "appointmentList" => $appointmentList);
            array_push($staffList, $staffMember);
            
        } else {
          
            die("Błąd pobierania wizyt z bazy danych");
        }
    }
    $smarty->assign("staffList", $staffList);
    $smarty->display("index.tpl");
} else {
   
    die("Błąd pobierania lekarzy z bazy danych");
}

?>