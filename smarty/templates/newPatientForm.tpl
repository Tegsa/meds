{include file='head.tpl'}
<form action="newPatient.php" method="post">
    <label for="firstName">Imię:</label>
    <input type="text" name="firstName" id="firstName">
    <label for="lastName">Nazwisko:</label>
    <input type="text" name="lastName" id="lastName">
    <label for="phone">Numer telefonu:</label>
    <input type="text" name="phone" id="phone">
    <label for="pesel">Numer PESEL</label>
    <input type="text" name="pesel" id="pesel">
    <input type="submit" value="Zapisz">
</form>
{include file='foot.tpl'}