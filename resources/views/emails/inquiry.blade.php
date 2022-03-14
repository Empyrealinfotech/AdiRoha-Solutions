@component('mail::message')
# Hi,

<p>Company Name : {{(isset($mailData->company_name) ? $mailData->company_name :'')}}</p>
<p>Name : {{(isset($mailData->name) ? $mailData->name :'')}}</p>
<p>Email : {{(isset($mailData->email) ? $mailData->email :'')}}</p>
<p>Mobile No. : {{(isset($mailData->phone_no) ? $mailData->phone_no :'')}}</p>

Thanks,<br>
{{ config('app.name', 'Laravel') }}
@endcomponent
