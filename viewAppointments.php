<h1>Umówione wizyty:</h1>
<?php
$db = new mysqli("localhost", "root", "", "med");

$patientId = $_REQUEST['id'];
$q = $db->prepare("SELECT appointment.date, staff.firstName, staff.lastName FROM patientappointment 
                    LEFT JOIN appointment ON patientappointment.appointment_id = appointment.id
                    LEFT JOIN staff ON appointment.staff_id = staff.id
                    WHERE patient_id = ?");
$q->bind_param("i",$patientId);
$q->execute();
$appointments = $q->get_result();
while($appointment = $appointments->fetch_assoc()) {
    
    $staffFirstName = $appointment['firstName'];
    $staffLastName = $appointment['lastName'];
    $date = $appointment['date'];
    echo "dr. $staffFirstName $staffLastName $date<br>";
}
 
?>