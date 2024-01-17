<x-mail::message>
# Introduction

Congratulations! You are now a premium user.
<p>Your purchase details:</p>
<p>Plan: <span style="font-weight:bold">{{ $plan }}</span></p>
<p>Your plan ends on: <span style="font-weight:bold">{{ $billingEnds }}</span></p>

<x-mail::button :url="''">
Post a Job
</x-mail::button>

Thanks,<br>
splenr
</x-mail::message>
