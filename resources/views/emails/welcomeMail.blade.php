@component('mail::message')

    Hi {{$user->name}},

    Thank you for registering to Pixel 2022, Your registration ID is "{{$user->email}}",
    It's your gate pass for the entire pixel event

    Name: {{$user->name}}
    Registration ID: {{$user->email}}

    Don't forget to participate in the events in pixel, You can find them at
@component('mail::button', ['url' => 'https://pixel2022.com/#events])
        pixel2022.com
@endcomponent
@component('mail::panel')
        <strong>Date:</strong>  <span>April 29, 2022 - April 30, 2022</span> <br>
        <strong>Venue:</strong> CSE Department, JNTUA College of Engineering, Anantapur.      <br>
        <strong>Contact us:</strong> pixel.jntua@gmail.com
@endcomponent

@endcomponent
