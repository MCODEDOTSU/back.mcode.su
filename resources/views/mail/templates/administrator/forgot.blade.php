<h1>Запрос на восстановление пароля пользователя</h1>
<table style="width:100%;">
    <?php if(isset($contractor)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Организация:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $contractor }}</td>
    </tr>
    <?php endif; ?>
    <?php if(isset($inn)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">ИНН:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $inn }}</td>
    </tr>
    <?php endif; ?>
    <?php if(isset($lastname) || isset($firstname) || isset($middlename)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">ФИО:</td>
        <td style="padding:8px 16px;vertical-align:top;">
            {{ isset($lastname) ? $lastname : '' }}
            {{ isset($firstname) ? $firstname : '' }}
            {{ isset($middlename) ? $middlename : '' }}
        </td>
    </tr>
    <?php endif; ?>
    <?php if (isset($post)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Должность:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $post }}</td>
    </tr>
    <?php endif; ?>
    <?php if(isset($phone)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Телефон:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $phone }}</td>
    </tr>
    <?php endif; ?>
    <?php if(isset($email)): ?>
    <tr>
        <td style="width:200px;padding:8px 16px;vertical-align:top;">Email:</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $email }}</td>
    </tr>
    <?php endif; ?>
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