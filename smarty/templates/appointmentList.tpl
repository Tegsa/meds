{include file='head.tpl'}
<h1>Umówione wizyty:</h1>
<ul>
{foreach $appointmentList as $appointment}
    <li>{$appointment['firstName']} {$appointment['lastName']} {$appointment['date']}</li>
{/foreach}
</ul>
{include file='foot.tpl'}