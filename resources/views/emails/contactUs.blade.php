@component('mail::message')
# Hi,

<p>Name : {{(isset($mailData->name) ? $mailData->name :'')}}</p>
<p>Email : {{(isset($mailData->email) ? $mailData->email :'')}}</p>
<p>Mobile No. : {{(isset($mailData->phone_no) ? $mailData->phone_no :'')}}</p>
<p>Message : {{(isset($mailData->message) ? $mailData->message :'')}}</p>

Thanks,<br>
{{ config('app.name', 'Laravel') }}
@endcomponent
