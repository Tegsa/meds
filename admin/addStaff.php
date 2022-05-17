<?php
if(isset($_REQUEST['firstName']) && isset($_REQUEST['lastName'])) {
    //wysłano już dane personelu do zapisania
    $db = new mysqli("localhost", "root", "", "med");
    //przygotuj kwerendę
    $q = $db->prepare("INSERT INTO staff VALUES(NULL, ?, ?)");
    //podstaw wartości z formularza
    $q->bind_param("ss", $_REQUEST['firstName'], $_REQUEST['lastName']);
    //wykonaj kwerendę
    if($q->execute()) {
        //jeśli kwerenda wykonała się poprawnie - wyświetl stosowny komunikat
        echo "Dodano nowy personel";
    }
} else {
    //dopiero weszliśmy na tę stronę
    echo '
    <form action="addStaff.php" method="post">
    <label for="firstName">Imię</label>
    <input type="text" name="firstName" id="firstName">
    <label for="lastName">Nazwisko</label>
    <input type="text" name="lastName" id="lastName">
    <input type="submit" value="Dodaj nowy personel">
    </form>
    ';
}
?>


