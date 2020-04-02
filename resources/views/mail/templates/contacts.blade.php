<h1>@lang('mcode.emails.contacts.subject')</h1>
<table style="width:100%;">
    <tr><td style="width:200px;padding:8px 16px;vertical-align:top;">@lang('mcode.emails.contacts.email')</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $email }}</td></tr>
    <tr><td style="width:200px;padding:8px 16px;vertical-align:top;">@lang('mcode.emails.contacts.phone')</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $phone }}</td></tr>
    <tr><td style="width:200px;padding:8px 16px;vertical-align:top;">@lang('mcode.emails.contacts.message')</td>
        <td style="padding:8px 16px;vertical-align:top;">{{ $text }}</td></tr>
</table>