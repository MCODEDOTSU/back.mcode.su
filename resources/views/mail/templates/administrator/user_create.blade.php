<h1>Новый пользователь успешно добавлен в систему</h1>
<table style="width:100%;">
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Организация:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $contractor }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">ИНН:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $inn }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">ФИО:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $lastname }} {{ $firstname }} {{ $middlename }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Должность:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $post }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Логин:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $name }}</td>
    </tr>
</table>