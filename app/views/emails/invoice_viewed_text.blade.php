{{ trans('texts.email_salutation', ['name' => $userName]) }}

{{ trans('texts.notification_viewed', ['amount' => $invoiceAmount, 'client' => $clientName, 'invoice' => $invoiceNumber]) }}

{{ trans('texts.email_signature') }}
{{ trans('texts.email_from') }}

{{ trans('texts.user_email_footer') }}