{include file='head.tpl'}

    {foreach $staffList as $staffMember}
    <h2>{$staffMember['firstName']} {$staffMember['lastName']}</h2>
        {foreach $staffMember['appointmentList'] as $appointment}
        <a href="patientLogin.php?id={$appointment['id']}" style="margin:10px; display:block">{$appointment['date']}</a>
            
        {/foreach}       
    {/foreach}
{include file='foot.tpl'}