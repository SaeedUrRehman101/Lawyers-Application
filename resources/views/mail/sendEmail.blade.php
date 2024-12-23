<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $subject }}</h1>
        <p class="text-center">Dear {{ $maillawName }},</p>
        <p class="text-center">We received your client meesage & they want to book an appointment with you.Client is <b>{{ $mailName }}</b> & they selected the slot <b>{{ $mailSlots }}</b> for an Appointment.{{ $mailName }} send a message to you it's "{{ $mailMessage }}".{{ $mailName }} wants {{ $mailService }} service.</p>
        <p>Thanks!</p>
    </div>
</body>
</html>