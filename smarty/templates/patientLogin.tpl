{include file='head.tpl'}
<div style="display:flex; flex-direction: row">
    <div style="flex-grow:1; text-align:center">
    <h1>Zaloguj się</h1>
    {if isset($appointmentId)}
    <form action="appointment.php" method="post">
    {else}
    <form action="index.php" method="post">
    {/if}
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        {if isset($appointmentId)}
        <input type="hidden" name="appointmentID" 
                value="{$appointmentId}">    
        {/if}
        
        <input type="submit" value="Zaloguj się">
    </form> 
    </div>
    <div style="flex-grow:1; text-align:center">
    <h1>Zarejestruj się</h1>
    {if isset($appointmentId)}
    <form action="appointment.php" method="post">
    {else}
    <form action="index.php" method="post">
    {/if}
        <label for="firstName">Imię:</label><br>
        <input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Nazwisko:</label><br>
        <input type="text" name="lastName" id="lastName"><br>
        <label for="pesel">PESEL:</label><br>
        <input type="text" name="pesel" id="pesel"><br>
        <label for="phone">Numer telefonu:</label><br>
        <input type="text" name="phone" id="phone"><br>
        {if isset($appointmentId)}
        <input type="hidden" name="appointmentID" 
                value="{$appointmentId}">    
        {/if}
        <input type="submit" value="Zarejestruj się">
    </form>
    </div>
</div>
{include file='foot.tpl'}

    
