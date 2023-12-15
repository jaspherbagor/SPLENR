<x-mail::message>
# Introduction

Congratulations! You are now a premium user.
<p>Your purchase details:</p>
<p>Plan: <span class="fw-semibold">{{ $plan }}</span></p>
<p>Your plan ends on: <span class="fw-semibold">{{ $billingEnds }}</span></p>

<x-mail::button :url="''">
Post a Job
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
