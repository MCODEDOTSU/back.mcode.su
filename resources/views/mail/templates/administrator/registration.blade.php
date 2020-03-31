<h1>Запрос на регистрацию нового пользователя</h1>
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
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Телефон:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $phone }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Email:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $email }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Пользователь принял политику сервисного
            обслуживания dormakaba:
        </td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $confirmed_politics ? 'Да' : 'Нет' }}</td>
    </tr>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Пользователь согласился на обработку своих
            персональных данных:
        </td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $confirmed_personal_data ? 'Да' : 'Нет' }}</td>
    </tr>
</table>